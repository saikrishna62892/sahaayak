<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
class SubscriptionController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','verified','is_user']);
    }
    
    public function store()
    {
    	$data=request()->validate([
    		'subscriberEmail' => 'required',
    	]);
    	Subscription::create($data);
    	return redirect('/');
    }
}
