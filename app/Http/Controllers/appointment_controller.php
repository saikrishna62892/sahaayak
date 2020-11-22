<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;
use App\Casehistory;
use Auth;
use DB;
use PDF;
use App\Notifications\AppointmentReceivedNotification;
use App\Notifications\AppointmentAcceptedNotification;
use App\Notifications\AppointmentReportNotification;
use App\User;
use App\Traits\NotificationTrait;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Session;

class appointment_controller extends Controller
{

    use NotificationTrait;

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('is_user')->only(['save']);
        //$this->middleware('is_volunteer')->only(['appointmentAccepted','reportForm','generateReport']);
        $this->middleware('is_counsellor')->only(['appointmentAccepted','reportForm','generateReport']);

    }
    function save(Request $req)
    {
        $startslots = ['00','08','09','10','11','12','13','14','15','16'];
        $endslots =   ['00','09','10','11','12','13','14','15','16','17'];
        /*
        $appointment=new Appointment();
        $user = Auth::user();
        $data = request()->validate([
         'name' => 'required',
         'college_id' => 'required',
         'department' => 'required',
         'gender' => 'required',
         'appointment_type' => 'required',
         'faculty_advisor' => 'required',
         'counsellor_name' => 'required',
         'date' => 'required',
         'slot' => 'required',
         'message' => 'required',
         ]);
        
        $appointment->name=$req->name;
        $appointment->college_id=$req->college_id;
        $appointment->department=$req->department;
        $appointment->gender=$req->gender;
        $appointment->appointment_type=$req->appointment_type;
        $appointment->faculty_advisor=$req->faculty_advisor;
        $appointment->counsellor_name=$req->counsellor_name;
        $appointment->date=$req->date;
        $appointment->slot=$req->slot;
        $appointment->message=$req->message;
        $appointment->timestamps=now();
        $appointment->user_id=$user->id;
        $appointment->counsellor_id=$req->counsellor_name;
        $appointment->save();
        $this->sendAppointmentReceivedNotif($appointment->name);
*/
        $event = new Event;
        $event->name = 'Sahaayak Appointment';
        //dd(Carbon::now().'     '.$req->date.' '.$startslots[$req->slot].':00:00');
        $d1 = Carbon::parse($req->date.' '.$startslots[$req->slot].':00:00');
        $d2 = Carbon::parse($req->date.' '.$endslots[$req->slot].':00:00');
        $event->startDateTime = $d1;
        $event->endDateTime = $d2;
        //$user->email
        $event->addAttendee(['email' => 'saikrishna_m190241cs@nitc.ac.in']);
        //$counsellor=Counsellor::find($appointment->counsellor_id);
        //$counsellor->calendarid

        $event->addAttendee(['email' => 'dileepkumar_m190437cs@nitc.ac.in']);
        $event->description='Appointment has been scheduled successfully and Please be on time.';
        $event->conferenceDataVersion=1;
        //$event->conferenceData.conferenceSolution.key.type='hangoutsMeet';
        $event->save(); 
       
        Session::flash('alert-success', 'Appointment Created Succesfully Please check your Google Calendar'); 
        return redirect()->back(); 
    }

     public function appointmentAccepted(Appointment $appointment)
    {
        /*if(is_null($appointment->volunteer_id))
        {
            $appointment->update(['volunteer_id' => auth()->user()->volunteer->id]);
            $this->sendAppointmentAcceptedNotif($appointment->user_id,$appointment);
            return redirect()->back()->with('message','User Appointment accepted');
        }
        else{
            return redirect()->back()->with('message','Sorry,User already alloted');
        }*/

        $appointment->update(['accept' => 1]);

        Session::flash('alert-success', 'User Appointment accepted'); 
        return redirect()->back();
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
        $data['volunteer_id'] = $appointment->counsellor_id;
        //Case History
        $casehistory = new Casehistory();
        $casehistory->appointment_id = $data['appointment_id'];
        $casehistory->remarks = $data['remarks'];
        $casehistory->save();

        $appointment->update(['is_Completed' => 1]);

        $pdf = PDF::loadView('appointment.generateReport',compact('data'));
        $user = User::find($appointment->user_id);
        $user->notify(new AppointmentReportNotification($pdf));
        Session::flash('alert-success', 'CaseHistory Added Succesfully'); 
        return redirect()->back();
    }

}