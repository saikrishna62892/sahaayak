<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;
use Auth;
use DB;
use PDF;
class appointment_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        return redirect()->back()->with('message', 'Posted Succcesfully'); 
    }
    public function appointmentAccepted(Appointment $appointment)
    {
        $appointment->update(['volunteer_id' => auth()->user()->volunteer->id]);
        return redirect()->back();

    }

    public function reportForm(Appointment $appointment)
    {
        return view('appointment.reportForm',compact('appointment'));
    }

    public function generateReport(Appointment $appointment)
    {
        $data = request()->all();
        $data['appointment_id'] = $appointment->id;
        $data['user_id'] = $appointment->user_id;
        $data['volunteer_id'] = $appointment->volunteer_id;
        $pdf = PDF::loadView('appointment.generateReport',compact('data'));
        return $pdf->download('report.pdf');
    }
}
