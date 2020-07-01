<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;
use Auth;
use DB;

class appointment_controller extends Controller
{
    function save(Request $req)
    {
        $appointment=new Appointment();
        $user = Auth::user();
        $temp= DB::table('appointment');
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
        $appointment->timestamp=now();
        $appointment->save();
        return redirect()->back()->with('message', 'Posted Succcesfully'); 
    }
}
