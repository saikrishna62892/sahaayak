<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Session;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','verified','is_user']);
    }

    public function store($learn , $learnID)
    {
    	$data = request()->validate([
    		'comment' => 'required'
    	]);
    	$data['learn_id'] = $learnID;
    	auth()->user()->comments()->create($data);
    	return redirect('/home/learn/'.$learn.'/'.$learnID);
    }
}
