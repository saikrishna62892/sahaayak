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
<<<<<<< HEAD
        $questionnaires = Questionnaire::all(); 
        #return view('admin.adminHome',compact('questionnaires'));
        return view('dashboard_admin');
=======
       $questionnaires = Questionnaire::all();
        return view('dashboard_admin',compact('questionnaires'));
>>>>>>> 3e40f3d7d74913f1a18d9239da1c12a866c2e3e1
    }
}
