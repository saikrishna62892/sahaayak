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
use App\Notifications\AppointmentReportNotification;
use App\User;
use App\Traits\NotificationTrait;

class appointment_controller extends Controller
{

    use NotificationTrait;

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('is_user')->only(['save']);
        $this->middleware('is_volunteer')->only(['appointmentAccepted','reportForm','generateReport']);

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
        if(is_null($appointment->volunteer_id))
        {
            $appointment->update(['volunteer_id' => auth()->user()->volunteer->id]);
            $this->sendAppointmentAcceptedNotif($appointment->user_id,$appointment);
            return redirect()->back()->with('message','User Appointment accepted');
        }
        else{
            return redirect()->back()->with('message','Sorry,User already alloted');
        }

    }

    public function reportForm(Appointment $appointment)
    {
        return view('appointment.reportForm',compact('appointment'));
    }

    public function generateReport()
    {
        $data = request()->all();
        $appointment = Appointment::find($data['appointment_id']);
        $data['user_id'] = $appointment->user_id;
        $data['volunteer_id'] = $appointment->volunteer_id;
        $pdf = PDF::loadView('appointment.generateReport',compact('data'));
        $user = User::find($appointment->user_id);
        $user->notify(new AppointmentReportNotification($pdf));
        return redirect()->back();
    }

}
        