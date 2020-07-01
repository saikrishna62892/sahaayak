<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    public function create()
    {
    	return view('video.create');
    }

    public function store()
    {
    	$data=request()->validate(
            [
                'videoSource'=>'required',
                'videoTag'=>'required',
                'videoURL'=>'required',
            ]);
        $video = Video::create($data);
        return redirect('/admin/home');
    }
}
