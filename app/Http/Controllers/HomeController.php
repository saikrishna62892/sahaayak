<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Volunteer;
use App\Counsellor;
use App\User;
use App\Talk;
use App\Story;
use App\Gallery;
use DB;
use PDF;
use App\Diary;
use Auth;
use App\News;
use App\Video;
use App\Appointment;
use Analytics;
use App\Quote;
use Carbon\Carbon;
use App\dialyquotes;
use App\Casehistory;
use Spatie\Analytics\Period;
use App\Playlist;
use App\Worry;
use App\Comment;
use Session;
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
        $counsellors = Counsellor::all();
        Session::flash('alert-success', 'DialyQuote Added Succesfully'); 
        return redirect()->back();
    }

     public function welcome(){
        $dialyquote=dialyquotes::all()->last()->quote;
        $featurednews=News::orderBy('created_at','desc')->get();
        $counsellors=Counsellor::all();
        #dd($featurednews);
        return view('welcome')->with(compact('dialyquote','featurednews','counsellors'));
    }


   
    /*public function index()
    {
        
    }*/

    public function adminHome()
    {
        //stats
        $users_count = User::where('is_admin',0)->where('is_Volunteer',0)->where('is_Counsellor',0)->count();
        $volunteers_count = Volunteer::all()->count();
        $counsellors_count = Counsellor::all()->count();
        $gallery_count = Gallery::all()->count();
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
        $counsellors = Counsellor::all();
        $comments=Comment::all();

        //dd($analyticsData);
        //dd($analyticsData[0]);
        //dd($analyticsData[0]['pageViews']);
        $newsarticle = new News();
        $talk = new Talk();
        $quote = new Quote();
        $video = new Video();
        $playlist = new Playlist();
        $counsellor = new Counsellor();
        //Session::flash('alert-success', 'Welcome '.$admin_name.' to the Dashboard'); 
        return view('admin.dashboard_admin',compact('unapprovedVolunteers','talks','users_count','volunteers_count','badges','shared_news','shared_videos','shared_quotes','shared_playlists','newsarticle','talk','quote','video','playlist','admin_name','suggestions','talks_count','gallery','counsellors_count','gallery_count','counsellors','counsellor','comments'));
    }
    public function getMonthlyReport(Request $request)
    {
        $counsellors = Counsellor::all();
        $req_month = $request->month;
        $req_year = $request->year;
        $month=["XXX","January","Febuary","March","April","May","June","July","August","September","October","November","December"]; 
        $appointments = Appointment::whereYear('created_at', $req_year)->whereMonth('created_at', $req_month)->get();
        $pdf = PDF::loadView('admin.getMonthlyReport',compact('appointments','month','counsellors','req_month','req_year'));
        Session::flash('alert-success', 'Downloaded Successfully'); 
        return $pdf->stream('Sahaayak_'.$month[$req_month].'_'.$req_year.'_Report.pdf');
    }
    public function getCurrentMonthReport()
    {
        $counsellors = Counsellor::all();
        $req_month = Carbon::now()->month;
        $req_year = Carbon::now()->year;
        $month=["XXX","January","Febuary","March","April","May","June","July","August","September","October","November","December"]; 
        $appointments = Appointment::whereYear('created_at', $req_year)->whereMonth('created_at', $req_month)->get();
        $pdf = PDF::loadView('admin.getMonthlyReport',compact('appointments','month','counsellors','req_month','req_year'));
        Session::flash('alert-success', 'Downloaded Successfully'); 
        return $pdf->stream('Sahaayak_'.$month[$req_month].'_'.$req_year.'_Report.pdf');
    }
    public function getOverallReport()
    {
        $counsellors = Counsellor::all();
        $pdf = PDF::loadView('admin.getOverallReport',compact('counsellors'));
        Session::flash('alert-success', 'Downloaded Successfully'); 
        return $pdf->stream('Sahaayak_Overall_Report.pdf');
    }


   /* public function volunteerHome()
    {
        $user=Auth::user();
        //user->volunteer->may appointments
        $volunteer = $user->volunteer;

        $appointments = $volunteer->appointments->where('accept',0);  //pending appointments as appointments, section- Allappointments

        //$appointments=Appointment::where('volunteer_id',null)->get();
       $completedappointments= $volunteer->appointments->where('accept',1)->where('is_Completed',0);  // accepted but not completed as completedappointments, section-myAppointments

        
        //volunteer stats
        
        $checkins=$user->checkins;
        $checkins=$checkins+1;
        $user->checkins=$checkins;
        $user->save();

        $requests=$appointments->count();

        $interactions=$completedappointments->count();

        //should be changed further
        $pending_reports=$interactions;
        Session::flash('alert-success', 'Welcome '.$user->name.' to the Dashboard'); 
       return view('volunteer.dashboard_volunteer')->with(compact('appointments','completedappointments','volunteer','checkins','requests','interactions','pending_reports'));

    }*/

    public function counsellorHome()
    {
        $user=Auth::user();
        //user->volunteer->may appointments
        $volunteer = $user->counsellor;

        $appointments = $volunteer->appointments->where('accept',0)->where('is_Rejected',0);  //pending appointments as appointments, section- Allappointments

        //$appointments=Appointment::where('volunteer_id',null)->get();
        $completedappointments= $volunteer->appointments->where('accept',1)->where('is_Completed',0);  // accepted but not completed as completedappointments, section-myAppointments

        
        //volunteer stats
        
        $checkins=$user->checkins;
        $checkins=$checkins+1;
        $user->checkins=$checkins;
        $user->save();

        $requests=$appointments->count();

        $interactions=$volunteer->appointments->where('accept',1)->where('is_Completed',1)->count();

        //should be changed further
        $casehistory_count=Casehistory::all()->count();
        

       return view('volunteer.dashboard_volunteer')->with(compact('appointments','completedappointments','volunteer','checkins','requests','interactions','casehistory_count'));

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

        //Session::flash('alert-success', 'Welcome '.$user->name.' to the Dashboard'); 
       return view('dashboard_user')->with(compact('user','user_stories','diary','checkins','stories_count','events_count','worries_count'));
    }


    public function editUserDetails(User $user){
        return view('auth.edit',compact('user'));
        return redirect()->back();
    }
    public function updateEditDetails(User $user){        
        $data=request()->validate(
            [                
                'name'=>'required',
                'rollnum'=>'required',
                'email'=>'required',
                'phone'=>'required',
            ]);
        $data['rollnum'] = strtoupper($data['rollnum']);
        $user->update($data);
        
        Session::flash('alert-success', 'User Details Edited Successfully'); 
        return redirect()->route('userDashboard');
    }
}
