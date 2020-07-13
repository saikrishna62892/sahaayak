<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
use DB;
use Auth;
use App\News;

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
        $image = $request->file('image');
        $name = $user->id.'_'.$temp.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/stories/');
        $image->move($destinationPath, $name);
        $story->image=$name;
    }
    $story->save();
    return redirect()->back()->with('message', 'Posted Succcesfully');
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
        $story->delete();
        return redirect()->back();
    }
}
