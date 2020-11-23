<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use App\Notifications\NewsNotification;
use App\User;
use App\Traits\NotificationTrait;
use Storage;
use Auth;
use Session;

class GalleryController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        
        $this->middleware(['auth','verified','is_admin'])->only(['index','store']);
    }


    public function index()
    {
    	return view('gallery.create');
    }
    
    public function store(Request $request)
    {
    	$gallery= new Gallery();
    	$user = Auth::user();
    	$temp= DB::table('galleries')->orderBy("id","desc")->value('id');
    	$temp++;
    	
    	$data = request()->validate([
            'image' => 'file|image|max:3000',
            'caption' => 'required',
            'paragraph' => 'required'
            ]);
    	
    	$gallery->caption = $request->caption;
    	$gallery->paragraph = $request->paragraph;
			    
		$gallery->save();
		$gallery->update([
			'image'=>$data['image']->store('uploads/gallery','s3')
		]);
	    Session::flash('alert-success', 'Image Posted Succcesfully in About Section');
	    return redirect()->back();
	}

	public function deletegallery(Gallery $gallery){
        Storage::disk('s3')->delete($gallery->image);
        $gallery->delete();
        Session::flash('alert-warning', 'Image Deleted Succcesfully');
        return redirect()->back();
    }
}
