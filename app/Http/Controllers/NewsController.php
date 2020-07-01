<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Notifications\QuestionnaireNotification;
use App\User;

class NewsController extends Controller
{
    //
	function index()
	{
		$data = DB::table('users')->paginate(2);
		return view('news',['newsdata'=>$data]);
	}
	 public function create()
    {
    	return view('news.create');
    }

    public function store(Request $request)
    {
    	$news= new News();

    	$data=request()->validate(
            [
            	'image'=>'required',
               'source'=>'required',
                'headline'=>'required',
                'content'=>'required',
                'newsurl'=>'required',
            ]);

    		if ($request->hasFile('image')) {
	        $image = $request->image;
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('/img/news/');
	        $image->move($destinationPath, $name);
	        $news->image=$name;
    	}

    	$news->source=$request->source;
    	$news->headline=$request->headline;
    	$news->content=$request->content;
    	$news->newsurl=$request->newsurl;

    	$users=User::all();
    foreach ($users as $user) {

        $user->notify(new QuestionnaireNotification($news->newsurl));
    }
    	//dd(request()->file('image'));
		$news->save();
		#return $news;
    	#return redirect()->back()->with('message', 'Posted Succcesfully');
       
        //return redirect('admin/news/create');
        return redirect()->back();
    
    }
}
