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
use App\User;
use PDF;

class CounsellorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('is_counsellor')->only(['appointmentAccepted','getCaseHistory','getHistory']);
        $this->middleware('is_admin')->only(['getDetails']);
    }

    public function store(Request $request)
    {
        $newuser = new User();
    	$counsellor= new Counsellor();
    	$data=request()->validate(
            [
                'image' => 'required|file|image|max:3000',
                'name'=>'required',
                'college_id'=>'required',
                'email'=>'required',
                'calendar_url' => 'required',
                'profession'=>'required'
            ]);

        $newuser->name=$request->name;
        $newuser->email=$request->email;
        $newuser->rollnum=$request->college_id;
        $newuser->password=bcrypt('12345678');
        $newuser->email_verified_at=Carbon::now();
        $newuser->is_Counsellor=1;
        $newuser->save();  
        
        $counsellor->user_id=$newuser->id;
        $counsellor->name=$request->name;
        $counsellor->college_id=$request->college_id;
        $counsellor->email=$request->email;
        $counsellor->calendar_url=$request->calendar_url;
        $counsellor->profession=$request->profession;
        $counsellor->bio=$request->bio;
        $counsellor->achievements=$request->achievements;  
        $counsellor->save();
        $counsellor->update([
            'file1' => $data['image']->store('uploads/counsellors','s3')
        ]);

        Session::flash('alert-success', 'Counsellor Details Added Successfully');
        return redirect()->back();
    }
    public function getDetails(Counsellor $counsellor)
    {
        return view('counsellors.getDetails',compact('counsellor'));
    }
    public function removeDetails(Counsellor $counsellor)
    {
        $user = User::find($counsellor->user_id)
        Storage::disk('s3')->delete([$counsellor->file1]);
        $user->delete();
        Session::flash('alert-info', 'Counsellor Details Deleted Successfully');
        return redirect()->back();
    }
    public function editDetails(Counsellor $counsellor)
    {
        return view('counsellors.edit',compact('counsellor'));
        return redirect()->back();
    }
    public function updateDetails(Counsellor $counsellor)
    {

        $data=request()->validate(
            [
                'image' => 'file|image|max:3000',
                'name'=>'required',
                'college_id'=>'required',
                'email'=>'required',
                'profession'=>'required',
                'calendar_url' => 'required'
            ]);

        $counsellor->name =  request()->name;
        $counsellor->college_id =  request()->college_id;
        $counsellor->email =  request()->email;
        $counsellor->profession =  request()->profession;
        $counsellor->bio =  request()->bio;
        $counsellor->achievements =  request()->achievements;
        $counsellor->calendar_url =  request()->calendar_url;
        $counsellor->save();
        $counsellor->update([
            'file1' => $data['image']->store('uploads/counsellors','s3')
        ]);
        Session::flash('alert-success', 'Counsellor Details Edited Successfully'); 
        return redirect()->route('adminDashboard');
    }

    public function getCaseHistory(User $user)
    {
        //user->appointments->casehistories
        $counsellor=Auth::user();
        $user->load('appointments.casehistory');
        $pdf = PDF::loadView('volunteer.casehistory',compact('user','counsellor'));
        Session::flash('alert-success', 'Downloaded Successfully');  
        return $pdf->stream('casehistory'.'_'.$user->name.'_'.$req->college_id.'.'.'pdf');
    }

    public function downloadReport(Request $req)
    {
        
        $roll=strtoupper($req->college_id);
        $counsellor=Auth::user();
        $user = User::where('rollnum',$roll)->first();
        if(!is_null($user)){
            $user->load('appointments.casehistory');
            $pdf = PDF::loadView('volunteer.casehistory',compact('user','counsellor'));
            Session::flash('alert-success', 'Downloaded Successfully'); 
            return $pdf->stream('casehistory'.'_'.$user->name.'_'.$req->college_id.'.'.'pdf');
        }
        else{
            Session::flash('alert-danger', 'User Details Not found!'); 
            return redirect()->back();
        }
    }
}