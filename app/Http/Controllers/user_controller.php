<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class user_controller extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $user=new User();
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=$req->pass;
        $user->verifed=0;
        $user->logged_in=0;
        $user->timestamp=now();
        $user->save();
    }
}
