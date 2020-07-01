<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
class SubscriptionController extends Controller
{
    public function store()
    {
    	$data=request()->validate([
    		'subscriberEmail' => 'required',
    	]);
    	Subscription::create($data);
    	return redirect('/');
    }
}