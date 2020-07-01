<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Volunteer;
use App\User;
use App\Talk;
use App\Story;
use DB;
use Illuminate\Support\Facades\Auth;



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
        $user_stories=DB::table('stories')->where('user_id', $user->id)->get();

        if(auth()->user()->is_Volunteer == 1)
        {
            if(auth()->user()->volunteer->is_Approved == 1)
                return redirect()->route('volunteerDashboard');
            else
            {
                Auth::logout();
                return "Your Application is under verification process";
            }
        }

        return view('dashboard_user')->with(compact('user','user_stories'));
    }

    public function adminHome()
    {
        $users_count = User::all()->count();
        $volunteers_count = Volunteer::all()->count();
        $unapprovedVolunteers = Volunteer::where('is_Approved',0)->get();
        $badges = $volunteers_count-$unapprovedVolunteers->count();
        $talks=Talk::all();
        $news = News::all();
        

        return view('admin.dashboard_admin',compact('unapprovedVolunteers','talks','users_count','volunteers_count','badges'));
    }

    public function volunteerHome()
    {
        return view('volunteer.dashboard_volunteer');
    }
}
