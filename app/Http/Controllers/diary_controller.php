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
    function save(Request $req)
    {
        switch($req->input('action')){
            case 'add_to_diary':
                           $diary=new Diary();
                           $user = Auth::user();
                           $temp= DB::table('stories')->orderBy("id","desc")->value('id');
                         $temp++;
                         $data = request()->validate([
                            'title' => 'required|min:20',
                            'content' => 'required',
                            ]);

                          $diary->title=$req->title;
                          $diary->content=$req->content;
                          $diary->user_id=$user->id;
                          $diary->date= today();
                         $diary->save();
                         
                         return redirect()->back()->with('message', 'Posted Succcesfully'); 
                         break;
            case 'add_to_story':$story= new Story();
                                $user = Auth::user();
                               $temp= DB::table('stories')->orderBy("id","desc")->value('id');
                             $temp++;
    
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
            
            #for image upload
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = $user->id.'_'.$temp.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/stories/');
            $image->move($destinationPath, $name);
            $story->image=$name;
        }
        $story->save();
        return redirect()->back()->with('message', 'Posted Succcesfully');             
        break;
        }
        
    }
}
