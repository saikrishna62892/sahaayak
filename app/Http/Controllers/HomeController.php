<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Volunteer;
use App\Diary;
use Auth;
use DB;

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
        $user=Auth::user();
        $diary=DB::table('diary')->where('user_id', $user->id)->get();
        return view('dashboard_user')->with(compact('diary'));
    }

    public function adminHome()
    {
        $unapprovedVolunteers = Volunteer::where('is_Approved',0)->get();
        //dd($unapprovedVolunteers);
        return view('admin.dashboard_admin',compact('unapprovedVolunteers'));
    }
}
