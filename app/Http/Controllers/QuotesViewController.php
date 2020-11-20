<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;
use DB;
use Session;

class QuotesViewController extends Controller
{
    public function index(){
      
        $quotes= Quote::orderBy('created_at','desc')->paginate(6);
        return view('inspire_me',['quotes' => $quotes]) ;    

    }
        
}
