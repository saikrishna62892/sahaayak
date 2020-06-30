<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Volunteer;

class VolunteerController extends Controller
{
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
            'file1' => $data['file1']->store('uploads/volunteer','public'),
            'file2' => $data['file2']->store('uploads/volunteer','public')
        ]);
    	return 'Your Application has been submitted. please wait for approval';
    }

    public function getDetails(Volunteer $unapprovedVolunteer)
    {
        return view('volunteer.getDetails',compact('unapprovedVolunteer'));
    }

    public function approveVolunteer(Volunteer $unapprovedVolunteer)
    {
        $unapprovedVolunteer->update(['is_Approved' => 1]);
        return 'This volunteer is approved';
    }
}
