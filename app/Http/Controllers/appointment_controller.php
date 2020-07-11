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
        $this->middleware(['auth','verified','is_user']);
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
    
}
