<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Volunteer;
use Storage;
class VolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('is_volunteer')->only(['appointmentAccepted']);
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
       // Storage::disk('s3')->delete([$unapprovedVolunteer->file1,$unapprovedVolunteer->file2]);
        $user->delete();
        return redirect()->back()->with('message','This volunteer is rejected');
    }

   

    
}
