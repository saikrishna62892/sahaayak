<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
use DB;
use Auth;
use App\News;
use Storage;
use Session;

class StoryController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        $this->middleware(['auth','verified','is_user'])->only(['index','store']);
    }

    public function index()
    {
    	return view('stories.create');
    }
    
    public function store(Request $request)
    {
    	$story= new Story();
    	$user = Auth::user();
    	$temp= DB::table('stories')->orderBy("id","desc")->value('id');
    	$temp++;

    	$data = request()->validate([
    		'title' => 'required',
    		'content' => 'required',
    		'category' => 'required',
            'image' => 'file|image|max:3000',
            ]);

    	$story->title = $request->title;
    	$story->content = $request->content;
    	$story->category = $request->category;
    	$story->user_id = $user->id;
    	
    	#for image upload
    if ($request->hasFile('image')) {
        $image = $request->image;
        $destinationPath = $image->store('uploads/story/img','s3');
        $story->image = basename($destinationPath);
        /*

        $image = $request->file('image');
        $name = $user->id.'_'.$temp.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/stories/');
        $image->move($destinationPath, $name);
        $story->image=$name;*/
    }
    $story->save();
    Session::flash('alert-success', 'Story Added Succesfully');
    return redirect()->back();
	}

	public function display()
	{
		$stories=Story::orderBy('created_at','desc')->paginate(6);

		//counts will happen here
		$category=['Depression','Suicide','Stress','Stigma','Healthy Sleep','Mental Illness','Hopelessness','Fear of Loss','Social Isolation'];
		$category_count=[];
		for($i = 0;$i < 9;$i++)
		{
		    $category_count[$i]= DB::select('select category from stories where category = :id', ['id' => $category[$i] ]);
		}

        $recent_news=News::orderBy('created_at','desc')->take(20)->get();


		return view('/stories/show')->with(compact('stories', 'category_count','recent_news'));
	}
	public function incrementLike(Story $story){
		$story->likes=$story->likes+1;
		$story->save();
		return redirect()->back();
	}
    public function deletestory(Story $story){
        Storage::disk('s3')->delete('uploads/story/img/'.$story->image);
        $story->delete();
        Session::flash('alert-warning', 'Story Deleted Succesfully');
        return redirect()->back();
    }
}
