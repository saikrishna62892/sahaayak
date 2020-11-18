<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Volunteer;
use App\User;
use App\Talk;
use App\Story;
use App\Gallery;
use DB;
use App\Diary;
use Auth;
use App\News;
use App\Video;
use App\Appointment;
use Analytics;
use App\Quote;
use Carbon\Carbon;
use App\dialyquotes;
use Spatie\Analytics\Period;
use App\Playlist;
use App\Worry;
//use Spatie\Analytics\Analytics;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function dialyQuote(Request $request){
        $quote= new dialyquotes();
        $quote->quote=$request->quote;
        $quote->save();
        $dialyquote=$request->quote;
        $featurednews=News::orderBy('created_at','desc')->get();
        return view('welcome')->with(compact('dialyquote','featurednews'));
    }

     public function welcome(){
        $dialyquote=dialyquotes::all()->last()->quote;
        $featurednews=News::orderBy('created_at','desc')->get();
        #dd($featurednews);
        return view('welcome')->with(compact('dialyquote','featurednews'));
    }


   
    /*public function index()
    {
        
    }*/

    public function adminHome()
    {
        //stats
        $users_count = User::all()->count();
        $volunteers_count = Volunteer::all()->count();
        $unapprovedVolunteers = Volunteer::where('is_Approved',0)->get();
        $badges = $volunteers_count-$unapprovedVolunteers->count();
        $talks_count=Talk::all()->count();
        

        //googleAnalytics

        //fetch the most visited pages for today and the past week
        //$analyticsData=Analytics::fetchMostVisitedPages(Period::days(7));

        //fetch visitors and page views for the past week
        //$analyticsData=Analytics::fetchVisitorsAndPageViews(Period::days(7));

        //retrieve visitors and pageview data for the current day and the last seven days
        //$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));



        //no-refresh loaders
        $admin_name=Auth::user()->name;
        $talks = DB::table('talks')->orderBy("created_at","desc")->paginate(3);
        $shared_news = DB::table('news')->orderBy("created_at","desc")->paginate(3);
        $shared_videos = DB::table('videos')->orderBy("created_at","desc")->paginate(5);
        $shared_quotes = DB::table('quotes')->orderBy("id","desc")->paginate(5);
        $shared_playlists = DB::table('playlists')->orderBy("id","desc")->paginate(5);
        $suggestions = DB::table('suggestion')->orderBy("id","desc")->paginate(5);
        $gallery = Gallery::all();

        //dd($analyticsData);
        //dd($analyticsData[0]);
        //dd($analyticsData[0]['pageViews']);
        $newsarticle = new News();
        $talk = new Talk();
        $quote = new Quote();
        $video = new Video();
        $playlist = new Playlist();
        return view('admin.dashboard_admin',compact('unapprovedVolunteers','talks','users_count','volunteers_count','badges','shared_news','shared_videos','shared_quotes','shared_playlists','newsarticle','talk','quote','video','playlist','admin_name','suggestions','talks_count','gallery'));
    }

    public function volunteerHome()
    {
        $appointments=Appointment::where('volunteer_id',null)->get();
        $volunteer = auth()->user()->volunteer;
        $completedappointments= $volunteer->load('appointments');


        //volunteer stats
        $user=Auth::user();
        $checkins=$user->checkins;
        $checkins=$checkins+1;
        $user->checkins=$checkins;
        $user->save();
        $requests=$appointments->count();
        $interactions=$completedappointments->appointments->count();
        //should be changed further
        $pending_reports=$interactions;
       return view('volunteer.dashboard_volunteer')->with(compact('appointments','completedappointments','volunteer','checkins','requests','interactions','pending_reports'));

    }

    public function userHome()
    {

        $user = Auth::user();
        //$user_stories = $user->stories->paginate(4);
        $user_stories = Story::where('user_id',$user->id)->paginate(4);
       // $diary = DB::table('diary')->orderBy("created_at","desc")->paginate(4);
           $diary = $user->diaries()->orderBy("created_at","desc")->paginate(4);

        $checkins=$user->checkins;
        $checkins=$checkins+1;
        $user->checkins=$checkins;
        $user->save();
        $stories_count=$user_stories->count();
        $events_count=$diary->count();
        $worries_count=Worry::where('user_id',$user->id)->get()->count();

        //session()->put('message','Welcome '.$user->name.' to the Dashboard');
        return view('dashboard_user')->with(compact('user','user_stories','diary','checkins','stories_count','events_count','worries_count'));
    }
}
