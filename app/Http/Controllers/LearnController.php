<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function show($learn , $learnID)
    {
    	//dd($learnID);
    	return view('learn.'.$learn ,compact('learn','learnID'));
    }
}
