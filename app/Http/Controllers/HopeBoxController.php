<?php

namespace App\Http\Controllers;
use Cohensive\Embed\Facades\Embed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
class HopeBoxController extends Controller
{   
    
	public function getEmbedHtml($urls)
	{
		$i=0;$j=0;$count=0;
		$embedURLs=[];
		foreach($urls as $url)
		{
			$embed = Embed::make($url['videoURL'])->parseUrl();
			if (!$embed)
            	$embedURLs[$i][$j] = '';
        	else
        	{
        		$embed->setAttribute(['width' => 400]);
        		$embedURLs[$i][$j]=$embed->getHtml();
        	}
        	if($count%2==1)
        		$i++;
        	$j=($j+1)%2;
        	$count++;
		}
		return $embedURLs;
	}

    public function displayVideos()
    {
    	$urls=Video::select('videoURL')->paginate(6);
    	$embedURLs = $this->getEmbedHtml($urls);
    	//dd($embedURLs);
    	return view('video.show',compact('embedURLs','urls'));
    }
}
