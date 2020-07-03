<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Volunteer;
use App\User;
use App\Talk;
use App\Story;
use DB;
use App\Diary;
use Auth;
use App\News;
use App\Video;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_stories = $user->stories;
        $diary = $user->diary;

        if(auth()->user()->is_Volunteer == 1)
        {
            if(auth()->user()->volunteer->is_Approved == 1)
                return redirect()->route('volunteerDashboard');
            else
            {
                Auth::logout();
                return 'Your Application is under verification process';
            }
        }
        session()->put('message','Welcome '.$user->name.' to the Dashboard');
        return view('dashboard_user')->with(compact('user','user_stories','diary'));
    }

    public function adminHome()
    {
        //stats
        $users_count = User::all()->count();
        $volunteers_count = Volunteer::all()->count();
        $unapprovedVolunteers = Volunteer::where('is_Approved',0)->get();
        $badges = $volunteers_count-$unapprovedVolunteers->count();
        
        //no-refresh loaders
        $talks = DB::table('talks')->orderBy("created_at","desc")->get();
        $shared_news = DB::table('news')->orderBy("created_at","desc")->get();
        $shared_videos = DB::table('videos')->orderBy("created_at","desc")->get();

        return view('admin.dashboard_admin',compact('unapprovedVolunteers','talks','users_count','volunteers_count','badges','shared_news','shared_videos'));
    }

    public function volunteerHome()
    {
        return view('volunteer.dashboard_volunteer');
    }
}
