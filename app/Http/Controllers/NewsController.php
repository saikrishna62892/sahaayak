<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Notifications\NewsNotification;
use App\User;
use App\Traits\NotificationTrait;
use Storage;
use Session;

class NewsController extends Controller
{

    use NotificationTrait;
    //

    public function __construct()
    {
        $this->middleware(['auth','verified','is_admin'])->only(['create','store','deletenews','editnews','update']);
    }


	function index()
	{
        $news = DB::table('users')->paginate(6);
        return view('/news/show')->with(compact('news'));
		//return view('news/show',['newsdata'=>$data]);
	}
	 public function create()
    {
        $newsarticle = new News();
    	return view('news.create',compact('newsarticle'));
    }

    public function store(Request $request)
    {
        
    	$news= new News();

    	$data=request()->validate(
            [
            	'image' => 'file|image|max:3000',
               'source'=>'required',
                'headline'=>'required',
                'content'=>'required',
                'newsurl'=>'required',
            ]);

    		if ($request->hasFile('image')) {
	        $image = $request->image;
            $destinationPath = $image->store('uploads/news/img','s3');
            $news->image = basename($destinationPath);
            /*
	        $name = time().'.'.$image->getClientOriginalExtension();
	         = public_path('/img/news/');
	        $image->move($destinationPath, $name);
	        $news->image=$name;*/
    	   }

    	$news->source=$request->source;
    	$news->headline=$request->headline;
    	$news->content=$request->content;
    	$news->newsurl=$request->newsurl;

        
		$news->save();
        $this->sendNewsNotif($news->headline);
        Session::flash('alert-success', 'News Added Succesfully');
        return redirect()->back();
    
    }
    public function display(){
        $news=News::orderBy('created_at','desc')->paginate(6);

        return view('/news/show')->with(compact('news'));
    }

    public function deletenews(News $newsarticle){
        $newsarticle->delete();
        Storage::disk('s3')->delete('uploads/news/img/'.$newsarticle->image);
        Session::flash('alert-warning', 'News Deleted Succesfully');
        return redirect()->back();
    }

    public function editnews(News $newsarticle){
         return view('news.edit',compact('newsarticle'));
    }
     public function update(News $newsarticle)
    {

        $data=request()->validate(
            [
                'image' => 'file|image|max:3000',
               'source'=>'required',
                'headline'=>'required',
                'content'=>'required',
                'newsurl'=>'required',
            ]);
            if (request()->hasFile('image')) {
                Storage::disk('s3')->delete('uploads/news/img/'.$newsarticle->image);
                $image = request()->image;
                $destinationPath = $image->store('uploads/news/img','s3');
                $data['image'] = basename($destinationPath);
            /*
            $image = request()->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/news/');
            $image->move($destinationPath, $name);
            $data['image'] = $name;*/
        }

        $newsarticle->update($data);
        Session::flash('alert-info', 'News Edited Succesfully');
        return redirect()->route('adminDashboard');
    }
}
