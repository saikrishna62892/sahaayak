<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use App\News;
use DB;
use Auth;
use App\Notifications\TalksNotification;
use App\User;
use App\Traits\NotificationTrait;
use Storage;
use Session;

class TalkController extends Controller
{

    use NotificationTrait;

    public function __construct()
    {
        //$this->middleware(['auth','verified']);
        
        $this->middleware(['auth','verified','is_admin'])->only(['index','store','deletetalk']);
    }


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
    		'title' => 'required|min:5',
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
        $image = $request->image;
        $destinationPath = $image->store('uploads/talk/img','s3');
        $talk->image = basename($destinationPath);
        /*
        $image = $request->file('image');
        $name = $user->id.'_'.$temp.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/talks/');
        $image->move($destinationPath, $name);
        $talk->image=$name;*/
    }
    $talk->save();
    $this->sendTalksNotif($talk->title);
    Session::flash('alert-success', 'Expert Talk Added Succesfully'); 
    return redirect()->back();
	}

	public function display()
	{
		$talks=Talk::orderBy('created_at','desc')->paginate(6);

		//counts will happen here
		$category=['Depression','Suicide','Stress','Stigma','Healthy Sleep','Mental Illness','Hopelessness','Fear of Loss','Social Isolation'];
		$category_count=[];
		for($i = 0;$i < 9;$i++)
		{
		    $category_count[$i]= DB::select('select category from talks where category = :id', ['id' => $category[$i] ]);
		}
        $recent_news=News::orderBy('created_at','desc')->take(20)->get();
		return view('/talks/show')->with(compact('talks', 'category_count','recent_news'));
	}
	public function incrementLike(Talk $talk){
		$talk->likes=$talk->likes+1;
		$talk->save();
		return redirect()->back();
	}
    public function deletetalk(Talk $talk)
    {
        Storage::disk('s3')->delete('uploads/talk/img/'.$talk->image);
        $talk->delete();
        Session::flash('alert-info', 'Expert Talk Deleted Succesfully');
        return redirect()->back();
    }

    public function edittalk(Talk $talk){
         return view('talks.edit',compact('talk'));
    }

    public function update(Talk $talk)
    {

        $data=request()->validate(
            [
            'title' => 'required|min:20',
            'content' => 'required',
            'category' => 'required',
            'image' => 'file|image|max:3000',
            ]);
            if (request()->hasFile('image')) {
                Storage::disk('s3')->delete('uploads/talk/img/'.$talk->image);
                $image = request()->image;
                $destinationPath = $image->store('uploads/talk/img','s3');
                $data['image'] = basename($destinationPath);
                /*
            $image = request()->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/talks/');
            $image->move($destinationPath, $name);
            $data['image'] = $name;*/
        }

        $talk->update($data);
        Session::flash('alert-success', 'Expert Talk Edited Succesfully');
        return redirect()->route('adminDashboard');
    }

}
