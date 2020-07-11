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
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['is_user'])->only(['index','display']);
        $this->middleware(['is_admin'])->only(['create','store','deletenews','editnews','update']);
    }

	function index()
	{
		$data = DB::table('users')->paginate(2);
		return view('news',['newsdata'=>$data]);
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
    public function display(){
        $news=News::orderBy('created_at','desc')->paginate(6);

        return view('/news/show')->with(compact('news'));
    }

    public function deletenews(News $newsarticle){
        $newsarticle->delete();
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
            $image = request()->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/news/');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        $newsarticle->update($data);
        return redirect()->route('adminDashboard');
    }
}
