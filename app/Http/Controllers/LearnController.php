<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class LearnController extends Controller
{
    public function show($learn , $learnID)
    {
    	$comments = Comment::where('learn_id',$learnID)->get();
    	//dd($comments);
    	return view('learn.'.$learn ,compact('learn','learnID','comments'));
    }
}
