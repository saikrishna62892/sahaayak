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
    	
    	#for image upload
	    if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $name = Carbon::now()->timestamp.'_'.request()->college_id.'_'.request()->name.'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('/img/galleries/');
	        $image->move($destinationPath, $name);
	        $gallery->image=$name;
	    }
	    
	    $gallery->save();
	    
	    return redirect()->back()->with('message', 'Posted Succcesfully');
	}

	public function deletegallery(Gallery $gallery){
        //Storage::disk('s3')->delete('uploads/playlist/img/'.$playlist->image);
        $gallery->delete();
        return redirect()->back();
    }
}
