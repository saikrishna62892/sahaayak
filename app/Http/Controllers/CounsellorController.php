<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counsellor;
use App\Appointment;
use Storage;
use Auth;
use Session;
use Carbon\Carbon;
use App\User;
use PDF;
use App\Traits\NotificationTrait;
use App\Notifications\MailToFANotification;



class CounsellorController extends Controller
{

    use NotificationTrait;

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
                'college_id'=>'required|unique:users,rollnum',
                'email'=>'required',
                'calendar_url' => 'required',
                'profession'=>'required'
            ]);

        $newuser->name=$request->name;
        $newuser->email=$request->email;
        $newuser->rollnum=strtoupper($request->college_id);
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
        if($request->hasFile('image')){
            $counsellor->update([
                'file1' => $data['image']->store('uploads/counsellors','s3')
            ]);
        }

        Session::flash('alert-success', 'Counsellor Details Added Successfully');
        return redirect()->back();
    }
    public function getDetails(Counsellor $counsellor)
    {
        return view('counsellors.getDetails',compact('counsellor'));
    }
    public function removeDetails(Counsellor $counsellor)
    {
        $user = User::find($counsellor->user_id);
        Storage::disk('s3')->delete([$counsellor->file1]);
        $user->delete();
        Session::flash('alert-info', 'Counsellor Details Deleted Successfully');
        return redirect()->back();
    }
    public function editDetails(Counsellor $counsellor)
    {
        return view('counsellors.edit',compact('counsellor'));
        //return redirect()->back();
    }
    public function updateDetails(Counsellor $counsellor)
    {
        $user=User::find($counsellor->user_id);
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
        $user->name = request()->name;
        $counsellor->college_id =  strtoupper(request()->college_id);
        $user->rollnum =  strtoupper(request()->college_id);
        $counsellor->email =  request()->email;
        $user->email =  request()->email;
        $counsellor->profession =  request()->profession;
        $counsellor->bio =  request()->bio;
        $counsellor->achievements =  request()->achievements;
        $counsellor->calendar_url =  request()->calendar_url;
        $counsellor->save();
        $user->save();
        if(request()->hasFile('image')){
            $counsellor->update([
                'file1' => $data['image']->store('uploads/counsellors','s3')
            ]);
        }
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
        return $pdf->stream('casehistory'.'_'.$user->name.'_'.$user->rollnum.'.'.'pdf');
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
    public function mailToFA(Appointment $appointment)
    {
        return view('counsellors.mailtofacultyadvisor',compact('appointment'));
    }
    public function mailToFAForm(Request $request)
    {
        $this->sendMailToFANotif($request);
        
        Session::flash('alert-success', 'Mail Posted Successfully to '.$request->fa_email.'.');
        return redirect()->route('counsellorDashboard');
    }
}