<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Diary;
use App\Story;
use Auth;
use DB;
use Storage;
use Session;

class diary_controller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified','is_user']);
    }
    
    function save(Request $req)
    {
        $user = Auth::user();
        switch($req->input('action'))
        {
            case 'add_to_diary':
                $diary=new Diary();
                $data = request()->validate([
                'title' => 'required',
                'content' => 'required',
                    ]);

                $diary->title=$req->title;
                $diary->content=$req->content;
                $diary->category = $req->category;
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
                ]);
    
                $story->title = $req->title;
                $story->content = $req->content;
                $story->category = $req->category;
                $story->user_id = $user->id;
                $story->save();
                Session::flash('alert-success', 'Event Added Succcesfully');
                return redirect()->back();             
            break;
        }
        
    }
    public function deleteevent(Diary $event){
        $event->delete();
        Session::flash('alert-warning', 'Event Deleted Succcesfully');
        return redirect()->back();
    }

    public function editevent(Diary $event){
         return view('diary.editEvent',compact('event'));
    }
    public function update(Diary $event)
    {
        $user = Auth::user();
        $data=request()->validate(
            [
                'title' => 'required',
                'content' => 'required',
                'category' => 'required',
            ]);
           $data['user_id'] = $user->id;

        $event->update($data);
        Session::flash('alert-info', 'Event Edited Succcesfully');
        return redirect()->route('userDashboard');
    }








}
