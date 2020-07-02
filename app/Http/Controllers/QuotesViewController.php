<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;
use DB;
class QuotesViewController extends Controller
{
    public function index(){
      
        $quotes= Quote::all();
        return view('inspire_me',['quotes' => $quotes]) ;    

    }
        
}
