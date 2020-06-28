<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
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
        /*$questionnaires = Questionnaire::all(); 
        return view('home',compact('questionnaires'));*/
        return view('dashboard_user');
    }

    public function adminHome()
    {
        #$questionnaires = Questionnaire::all(); 
        #return view('dashboard_admin',compact('questionnaires'));
        return view('dashboard_admin');
    }
}
