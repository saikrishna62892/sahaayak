<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use DB;
use Auth;

class TalkController extends Controller
{
    public function index()
    {
    	return view('talks.create');
    }
    
    public function store(Request $request)
    {
    	$talk= new Talk();
    	$user = Auth::user();
    	$temp= DB::table('talks')->orderBy("id","desc")->value('id');
    	$temp++;

    	$data = request()->validate([
    		'title' => 'required|min:20',
    		'content' => 'required',
    		'category' => 'required',
            'image' => 'file|image|max:3000',
            ]);

    	$talk->title = $request->title;
    	$talk->content = $request->content;
    	$talk->category = $request->category;
    	$talk->user_id = $user->id;
    	
    	#for image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $user->id.'_'.$temp.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/talks/');
        $image->move($destinationPath, $name);
        $talk->image=$name;
    }
    $talk->save();
    return redirect()->back()->with('message', 'Posted Succcesfully');
	}

	public function display()
	{
		$talks=Talk::orderBy('created_at','desc')->get();

		//counts will happen here
		$category=['Depression','Suicide','Stress','Stigma','Healthy Sleep','Mental Illness','Hopelessness','Fear of Loss','Social Isolation'];
		$category_count=[];
		for($i = 0;$i < 9;$i++)
		{
		    $category_count[$i]= DB::select('select category from talks where category = :id', ['id' => $category[$i] ]);
		}
		return view('/talks/show')->with(compact('talks', 'category_count'));
	}
	public function incrementLike(Talk $talk){
		$talk->likes=$talk->likes+1;
		$talk->save();
		return redirect()->back();
	}
}