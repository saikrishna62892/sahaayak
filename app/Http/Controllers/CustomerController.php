<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Cohensive\Embed\Facades\Embed;
use Session;

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
    	$embedurl=$this->getEmbedHtml("https://www.youtube.com/watch?v=bULHYPjbdZU");
        

        return view('signup',compact('embedurl'));
    }
}
