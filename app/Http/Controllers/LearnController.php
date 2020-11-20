<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Session;

class LearnController extends Controller
{
    public function show($learn , $learnID)
    {
    	$comments = Comment::where('learn_id',$learnID)->take(5)->get();
    	return view('learn.'.$learn ,compact('learn','learnID','comments'));
    }
}
