<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
	function index()
	{
		$data = DB::table('users')->paginate(1);
		return view('news',['newsdata'=>$data]);
	}
}
