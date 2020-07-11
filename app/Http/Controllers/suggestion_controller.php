<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Suggestion;
use Auth;
use DB;

class suggestion_controller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified','is_user']);
    }
    function save(Request $req)
    {
        $suggestion=new Suggestion();
        $user = Auth::user();
        $temp= DB::table('appointment');
      $temp++;
      $data = request()->validate([
         'name' => 'required',
         'email' => 'required|email',
         'comment' => 'required',
         ]);
         $suggestion->name=$req->name;
         $suggestion->email=$req->email;
         $suggestion->comment=$req->comment;
         $suggestion->timestamp=now();
         $suggestion->save();
        return redirect()->back()->with('message', 'Posted Succcesfully'); 
    }
}
