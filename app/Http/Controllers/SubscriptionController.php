<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
use Session;


class SubscriptionController extends Controller
{
	public function __construct()
    {

        $this->middleware(['auth','verified','is_user']);
    }
    

    public function store()
    {
    	if( !Subscription::where('user_id' , auth()->user()->id)->exists())
    	   Subscription::create(['user_id' => auth()->user()->id]);
    	return redirect('/');
    }
}
