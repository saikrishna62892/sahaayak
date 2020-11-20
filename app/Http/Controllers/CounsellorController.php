<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counsellor;
use Storage;
use Auth;
use Session;
use Carbon\Carbon;

class CounsellorController extends Controller
{
    public function store(Request $request)
    {
    	$counsellor= new Counsellor();
        $user = Auth::user();

    	$data=request()->validate(
            [
                'image' => 'file|image|max:3000',
                'name'=>'required',
                'college_id'=>'required',
                'email'=>'required',
                'calendar_url' => 'required',
                'profession'=>'required'
            ]);

        #for image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Carbon::now()->timestamp.'_'.request()->college_id.'_'.request()->name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/counsellors/');
            $image->move($destinationPath, $name);
            $counsellor->image=$name;
        }
        $counsellor->name=$request->name;
        $counsellor->college_id=$request->college_id;
        $counsellor->email=$request->email;
        $counsellor->calendar_url=$request->calendar_url;
        $counsellor->profession=$request->profession;
        $counsellor->bio=$request->bio;
        $counsellor->achievements=$request->achievements;        
        $counsellor->save();
        Session::flash('alert-success', 'Counsellor Details Added Successfully');
        return redirect()->back();
    }
    public function getDetails(Counsellor $counsellor)
    {
        return view('counsellors.getDetails',compact('counsellor'));
    }
    public function removeDetails(Counsellor $counsellor)
    {
        $counsellor->delete();
        return redirect()->back();
    }
    public function editDetails(Counsellor $counsellor)
    {
        return view('counsellors.edit',compact('counsellor'));
        return redirect()->back();
    }
    public function updateDetails(Counsellor $counsellor)
    {

        $user = Auth::user();

        $data=request()->validate(
            [
                'image' => 'file|image|max:3000',
                'name'=>'required',
                'college_id'=>'required',
                'email'=>'required',
                'profession'=>'required',
                'calendar_url' => 'required'
            ]);

        #for image upload
        if (request()->hasFile('image')) {

            $destinationPath = public_path('/img/counsellors/');
            //code for remove old file
            if($counsellor->image != ''  && $counsellor->image != null){
                $image_old = $destinationPath.$counsellor->image;
                unlink($image_old);
            }
            $image = request()->image;
            $name = Carbon::now()->timestamp.'_'.request()->college_id.'_'.request()->name.'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $counsellor->image=$name;
        }
        $counsellor->name =  request()->name;
        $counsellor->college_id =  request()->college_id;
        $counsellor->email =  request()->email;
        $counsellor->profession =  request()->profession;
        $counsellor->bio =  request()->bio;
        $counsellor->achievements =  request()->achievements;
        $counsellor->calendar_url =  request()->calendar_url;
        $counsellor->save();
        Session::flash('alert-success', 'Counsellor Details Edited Successfully'); 
        return redirect()->route('adminDashboard');
    }

}