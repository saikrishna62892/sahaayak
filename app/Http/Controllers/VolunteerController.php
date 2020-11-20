<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Volunteer;
use App\Casehistory;
use Storage;
use PDF;
use App\Mail\RejectVolunteerMail;
use Illuminate\Support\Facades\Mail;
class VolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('is_counsellor')->only(['appointmentAccepted']);
        $this->middleware('is_admin')->only(['getDetails','approveVolunteer']);
    }
    
    public function step2(User $user)
    {
    	return view('volunteer.volunteer_signup',compact('user'));
    }

    public function store(User $user)
    {
    	$data = request()->validate([
    		'name' => 'required',
    		'phone' => 'required',
    		'qualification' => 'required',
    		'work' => 'required',
    		'insight' => 'required',
    		'queries' => 'nullable',
            'file1' => 'required|file|image|max:3000',
            'file2' => 'required|file|image|max:3000'
    	]);
    	$volunteer = $user->volunteer()->create($data) ;
        $volunteer->update([
            'file1' => $data['file1']->store('uploads/volunteer','s3'),
            'file2' => $data['file2']->store('uploads/volunteer','s3')
        ]);
        //Storage::disk('s3')->setVisibility($volunteer->file1,'public');
        //Storage::disk('s3')->setVisibility($volunteer->file2,'public');
        $user->update(['step2_done' => 1]);

    	return redirect('/volunteer/waitingApproval');
    }

    public function getDetails(Volunteer $unapprovedVolunteer)
    {
        return view('volunteer.getDetails',compact('unapprovedVolunteer'));
    }

    public function approveVolunteer(Volunteer $unapprovedVolunteer)
    {
        $unapprovedVolunteer->update(['is_Approved' => 1]);
        return redirect()->back()->with('message','This volunteer is approved');
    }

    public function destroy(Volunteer $unapprovedVolunteer)
    {
        $user = User::find($unapprovedVolunteer->user_id);
        Mail::to($user->email)->send(new RejectVolunteerMail());
        Storage::disk('s3')->delete([$unapprovedVolunteer->file1,$unapprovedVolunteer->file2]);
        $user->delete();
        return redirect()->back()->with('message','This volunteer is rejected');
    }
   /* public function addCasehistory(request $req)
    {
        $casehistory = new Casehistory();
        $casehistory->appointment_id = $req->appointment_id;
        $casehistory->remarks = $req->remarks;
        $casehistory->save();
         return redirect()->back()->with('message','Case history added');
    }*/
    /*public function getCaseHistory(User $user)
    {
        //user->appointments->casehistories
        $user->load('appointments.casehistory');
        $pdf = PDF::loadView('volunteer.casehistory',compact('user'));
        return $pdf->stream('casehistory.pdf');
    }*/
    /*public function getHistory(Request $req)
    {
        $user = User::find($req->userID);
        $user->load('appointments.casehistory');
        $pdf = PDF::loadView('volunteer.casehistory',compact('user'));
        return $pdf->stream('casehistory.pdf');
    }/*
    
}
