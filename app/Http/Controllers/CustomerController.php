<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Cohensive\Embed\Facades\Embed;
class CustomerController extends Controller
{
	public function getEmbedHtml($vid)
	{
		$embed = Embed::make($vid)->parseUrl();
		if (!$embed)
            return '';
        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
	}

    public function sendMail()
    {
    	/*$customer = new \App\Customer();
    	$customer->name="jkl";
    	$customer->phone=10;
    	$customer->save();
    	Mail::to('abc@abc.com')->send(new WelcomeMail());
    	return new WelcomeMail();*/

    	//$embed = Embed::make($this->video)->parseUrl();
    	$embedurl=$this->getEmbedHtml("https://www.youtube.com/watch?v=bULHYPjbdZU");
        

        return view('signup',compact('embedurl'));
    }
}
