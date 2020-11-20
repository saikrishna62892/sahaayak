<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\Notifications\VideoNotification;
use App\User;
use App\Traits\NotificationTrait;
use Session;

class VideoController extends Controller
{

    use NotificationTrait;


    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        $this->middleware(['auth','verified','is_admin'])->only(['create','store','deletevideo','editvideo','update']);
    }
    

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
        $this->sendVideosNotif($video->videoTag);
        Session::flash('alert-success', 'Video Added Successfully');
        return redirect('/admin/home');
    }

    public function deletevideo(Video $video){
        $video->delete();
        Session::flash('alert-warning', 'Video Deleted Successfully');
        return redirect()->back();
    }
    public function editvideo(Video $video){
         return view('video.edit',compact('video'));
    }
    public function update(Video $video)
    {

        $data=request()->validate(
            [
                'videoSource'=>'required',
                'videoTag'=>'required',
                'videoURL'=>'required',
            ]);

        $video->update($data);
        Session::flash('alert-info', 'Video Edited Successfully');
        return redirect()->route('adminDashboard');
    }




}
