<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
class SubscriptionController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function store()
    {
    	
    	Subscription::create(['user_id' => auth()->user()->id]);
    	return redirect('/');
    }
}
