<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;
use Auth;
use DB;
use PDF;
use App\Notifications\AppointmentReceivedNotification;
use App\Notifications\AppointmentAcceptedNotification;
use App\User;
use App\Traits\NotificationTrait;

class appointment_controller extends Controller
{

    use NotificationTrait;

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('is_user')->only(['save']);
        $this->middleware('is_volunteer')->only(['appointmentAccepted']);

    }
    function save(Request $req)
    {
        $appointment=new Appointment();
        $user = Auth::user();
        $temp= DB::table('appointments');
        $temp++;
        $data = request()->validate([
         'name' => 'required',
         'email' => 'required|email',
         'phone'=>'required|min:10|numeric',
         ]);
        $appointment->name=$req->name;
        $appointment->email=$req->email;
        $appointment->phone=$req->phone;
        $appointment->timings=$req->timings;
        $appointment->message=$req->message;
        $appointment->timestamps=now();
        $appointment->user_id=$user->id;
        $appointment->save();
        $this->sendAppointmentReceivedNotif($appointment->name);
        return redirect()->back()->with('message', 'Posted Succcesfully'); 
    }

     public function appointmentAccepted(Appointment $appointment)
    {
        $appointment->update(['volunteer_id' => auth()->user()->volunteer->id]);
        $this->sendAppointmentAcceptedNotif($appointment->user_id,$appointment);
        return redirect()->back();

    }

    

}
