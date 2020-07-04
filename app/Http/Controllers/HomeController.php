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
use App\Appointment;
use Analytics;
use Spatie\Analytics\Period;


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
                return view('welcome')->with('message','Your Application is under verification process');
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
        

        //googleAnalytics

        //fetch the most visited pages for today and the past week
        //$analyticsData=Analytics::fetchMostVisitedPages(Period::days(7));

        //fetch visitors and page views for the past week
        //$analyticsData=Analytics::fetchVisitorsAndPageViews(Period::days(7));

        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));


        //no-refresh loaders
        $talks = DB::table('talks')->orderBy("created_at","desc")->get();
        $shared_news = DB::table('news')->orderBy("created_at","desc")->get();
        $shared_videos = DB::table('videos')->orderBy("created_at","desc")->get();
        $shared_quotes = DB::table('quotes')->orderBy("id","desc")->get();
        $shared_playlists = DB::table('playlists')->orderBy("id","desc")->get();

        //dd($analyticsData);
        //dd($analyticsData[0]);
        //dd($analyticsData[0]['pageViews']);

        return view('admin.dashboard_admin',compact('unapprovedVolunteers','talks','users_count','volunteers_count','badges','shared_news','shared_videos','shared_quotes','analyticsData','shared_playlists'));
    }

    public function volunteerHome()
    {
        $appointments=Appointment::where('volunteer_id',null)->get();
        $volunteer = auth()->user()->volunteer;
        $completedappointments= $volunteer->load('appointments');
       return view('volunteer.dashboard_volunteer')->with(compact('appointments','completedappointments'));

    }
}
