<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Suggestion;

class suggestion_controller extends Controller
{
    function save(Request $req)
    {
        $user=new Suggestion();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->comment=$req->comment;
        $user->timestamp=now();
        $user->save();
    }
}
