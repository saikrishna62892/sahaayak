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
use App\Notifications\AppointmentRejectedNotification;
use App\Notifications\AppointmentRescheduledNotification;
use App\Notifications\AppointmentReportNotification;
use App\User;
use App\Counsellor;
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
        $this->middleware('is_counsellor')->only(['appointmentAccepted','reportForm','addCasehistory']);

    }
    function save(Request $req)
    {
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
        $appointment->college_id=strtoupper($req->college_id);
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
        $appointment->assessment_name = $req->assessment_name;
        $appointment->assessment_marks = $req->assessment_marks;
        $appointment->save();
        $this->sendAppointmentReceivedNotif($appointment->name);

        Session::flash('alert-success', 'Appointment Received,Please Wait for Counsellor Acceptance'); 
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
        $user=User::find($appointment->user_id);
        $startslots = ['00','08','09','10','11','12','13','14','15','16'];
        $endslots =   ['00','09','10','11','12','13','14','15','16','17'];
        $d1=$appointment->date.'T'.$startslots[$appointment->slot].':00:00+05:30';
        $d2=$appointment->date.'T'.$endslots[$appointment->slot].':00:00+05:30';
        //dd($d1.'     '.$d2);
 

        //$d1 = Carbon::parse($appointment->date.'T'.$startslots[$appointment->slot].':00:00-00:00');
        //$d2 = Carbon::parse($appointment->date.'T'.$startslots[$appointment->slot].':00:00-01:00');

        
        //2018-08-16T14:30:00-00:00

        $event = new Event;
        $event->create(array(
          'summary' => 'Sahaayak Appointment', //'Google Calendar summary',
          'location' => 'India', //'USA',
          'description' => 'Appointment has been scheduled successfully and Please be on time.', //'Book Room',
          'start' => array(
            'dateTime' => $d1,//'2018-08-16T14:30:00-00:00',
            'timeZone' => 'Asia/Kolkata',
          ),
          'end' => array(
            'dateTime' => $d2,//'2018-08-16T14:30:00-01:00',
            'timeZone' => 'Asia/Kolkata',
          ),
          'attendees' => array(
            array('email' => $user->email,'resource' => true),
            array('email' => Auth::user()->email,'resource' => true),
          ),
          'reminders' => array(
            'useDefault' => FALSE,
            'overrides' => array(
              array('method' => 'popup', 'minutes' => 10),
            ),
          ),
        'conferenceData' => array(
                'createRequest' => array(
                  'conferenceSolutionKey' => array(
                    'type' => 'hangoutsMeet'
                  ),
                  'requestId' => '123'
                ),
              ),


        ),'dileepkumar_m190437cs@nitc.ac.in',['conferenceDataVersion' => 1]);
        $appointment->update(['accept' => 1]);
        $this->sendAppointmentAcceptedNotif($appointment,$appointment->user_id);
        Session::flash('alert-success', 'User Appointment accepted'); 
        return redirect()->back();
    }
    public function appointmentRejected(Appointment $appointment){

        $appointment->update(['is_Rejected' => 1]);
        $this->sendAppointmentRejectedNotif($appointment->name,$appointment->user_id);
        Session::flash('alert-info', 'User Appointment Rejected'); 
        return redirect()->back();
    }
    public function appointmentRescheduled(Appointment $appointment, int $which_form){


        Session::flash('alert-info', 'Reschedule Your Appointment now !'); 
        return view('appointment.editAppointment',compact('appointment','which_form'));
    }
    public function appointmentEdit(Request $req){
        $data = request()->validate([
         'date' => 'required',
         'slot' => 'required'
        ]);
        $appointment = Appointment::find($req->appointment_id);
        $appointment->update(['accept' => 1]);
        $appointment->update(['is_Rescheduled' => 1]);
        $appointment->update(['date' => $req->date]);
        $appointment->update(['slot' => $req->slot]);
        $user=User::find($appointment->user_id);
        $startslots = ['00','08','09','10','11','12','13','14','15','16'];
        $endslots =   ['00','09','10','11','12','13','14','15','16','17'];
        $d1=$appointment->date.'T'.$startslots[$appointment->slot].':00:00+05:30';
        $d2=$appointment->date.'T'.$endslots[$appointment->slot].':00:00+05:30';

        if($req->which_form == 1){
            $event = new Event;
            $event->create(array(
              'summary' => 'Sahaayak Appointment', //'Google Calendar summary',
              'location' => 'India', //'USA',
              'description' => 'Appointment has been rescheduled as per counsellor convenience and Please be on time.', //'Book Room',
              'start' => array(
                'dateTime' => $d1,//'2018-08-16T14:30:00-00:00',
                'timeZone' => 'Asia/Kolkata',
              ),
              'end' => array(
                'dateTime' => $d2,//'2018-08-16T14:30:00-01:00',
                'timeZone' => 'Asia/Kolkata',
              ),
              'attendees' => array(
                array('email' => $user->email,'resource' => true),
                array('email' => Auth::user()->email,'resource' => true),
              ),
              'reminders' => array(
                'useDefault' => FALSE,
                'overrides' => array(
                  array('method' => 'popup', 'minutes' => 10),
                ),
              ),
            'conferenceData' => array(
                    'createRequest' => array(
                      'conferenceSolutionKey' => array(
                        'type' => 'hangoutsMeet'
                      ),
                      'requestId' => '123'
                    ),
                  ),


            ),'dileepkumar_m190437cs@nitc.ac.in',['conferenceDataVersion' => 1]);
        }        
        elseif ($req->which_form == 2) {
            /*// First retrieve the event from the API.
            $event=new Event;
            $cal = $event->getGoogleCalendar("dileepkumar_m190437cs@nitc.ac.in");
            dd($cal);
            
            $events = $service->events->get('primary', 'eventId');

            $event->setSummary('Appointment at Somewhere');

            $updatedEvent = $service->events->update('primary', $event->getId(), $event);*/
        }
        $this->sendAppointmentRescheduledNotif($appointment,$appointment->user_id);
        Session::flash('alert-info', 'User Appointment Accepted & Rescheduled'); 
        return redirect()->route('counsellorDashboard');
    }


    public function reportForm(Appointment $appointment)
    {
        return view('appointment.reportForm',compact('appointment'));
    }

    public function addCasehistory()
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

        //$pdf = PDF::loadView('appointment.generateReport',compact('data'));
        //$user = User::find($appointment->user_id);
        //$user->notify(new AppointmentReportNotification($pdf));
        Session::flash('alert-success', 'CaseHistory Added Succesfully'); 
        return redirect()->back();
    }

}