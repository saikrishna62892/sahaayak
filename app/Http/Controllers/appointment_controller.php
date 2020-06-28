<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;

class appointment_controller extends Controller
{
    function save(Request $req)
    {
        $user=new Appointment();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->timings=$req->timings;
        $user->message=$req->message;
        $user->timestamp=now();
        $user->save();
    }
}
