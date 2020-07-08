<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Diary;
use App\Story;
use Auth;
use DB;

class diary_controller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    function save(Request $req)
    {
        switch($req->input('action'))
        {
            $user = Auth::user();
            case 'add_to_diary':
                $diary=new Diary();
                $data = request()->validate([
                'title' => 'required',
                'content' => 'required',
                    ]);

                $diary->title=$req->title;
                $diary->content=$req->content;
                $diary->user_id=$user->id;
                $diary->save();
             
                return redirect()->back()->with('message', 'Posted Succcesfully'); 
            break;
            case 'add_to_story':
                $story= new Story();
                $data = request()->validate([
                'title' => 'required|min:20',
                'content' => 'required',
                'category' => 'required',
                'image' => 'file|image|max:3000',
                ]);
    
                $story->title = $req->title;
                $story->content = $req->content;
                $story->category = $req->category;
                $story->user_id = $user->id;
                $story->save();
                return redirect()->back()->with('message', 'Posted Succcesfully');             
            break;
        }
        
    }
}
