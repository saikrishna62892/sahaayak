<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriber;

class subscriber_controller extends Controller
{
    function save(Request $req)
    {
    $user=new Subscriber();
    $user->email=$req->email;
    $user->timestamp=now();
    $user->save();
    }
}
