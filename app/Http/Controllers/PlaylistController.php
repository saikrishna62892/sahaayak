<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Playlist;
use Auth;
use DB;
use App\User;
use App\Notifications\NewsNotification;
use App\Traits\NotificationTrait;
use Storage;
use Session;

class PlaylistController extends Controller
{

  use NotificationTrait;
  

    public function __construct()
    {
        $this->middleware(['auth','verified','is_admin'])->only(['save','deleteplaylist','editplaylist','update']);
    }

  public function index(){
    $playlist = Playlist::orderBy("created_at","desc")->paginate(6);
    return view('playlists')->with(compact('playlist'));

  }
  
  public function save(Request $request)
  {
    $playlist= new Playlist();
    $temp= DB::table('playlists')->orderBy("id","desc")->value('id');
    $temp++;

      $data=request()->validate(
          [
              'playlistSource'=>'required',
              'playlistTag'=>'required',
              'playlistURL'=>'required',
              'image' => 'file|image|max:3000',
          ]);

          $playlist->playlistSource = $request->playlistSource;
          $playlist->playlistTag = $request->playlistTag;
          $playlist->playlistURL = $request->playlistURL;
          
          #for image upload
        if (request()->hasFile('image')) {
            $image = request()->image;
            $destinationPath = $image->store('uploads/playlist/img','s3');
            $playlist->image = basename($destinationPath);
            /*
            $image = $request->file('image');
            $name = $temp.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/playlists/');
            $image->move($destinationPath, $name);
            $playlist->image=$name;*/
        }


        $playlist->save();
        $this->sendPlaylistNotif($playlist->playlistSource);
        Session::flash('alert-success', 'Playlist Added Succesfully');
      return redirect('/admin/home');
      
    }

    public function deleteplaylist(Playlist $playlist){
        Storage::disk('s3')->delete('uploads/playlist/img/'.$playlist->image);
        $playlist->delete();
        Session::flash('alert-warning', 'Playlist Deleted Succesfully');
        return redirect()->back();
    }

     public function editplaylist(Playlist $playlist){
         return view('playlists.edit',compact('playlist'));
    }
     public function update(Playlist $playlist)
    {

        $data=request()->validate(
            [
                'playlistSource'=>'required',
              'playlistTag'=>'required',
              'playlistURL'=>'required',
              'image' => 'file|image|max:3000',
            ]);
            if (request()->hasFile('image')) {
              Storage::disk('s3')->delete('uploads/playlist/img/'.$playlist->image);
              $image = request()->image;
              $destinationPath = $image->store('uploads/playlist/img','s3');
              $data['image'] = basename($destinationPath);
            /*
            $image = request()->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/playlists/');
            $image->move($destinationPath, $name);
            $data['image'] = $name;*/
        }

        $playlist->update($data);
        Session::flash('alert-info', 'Playlist Edited Succesfully');
        return redirect()->route('adminDashboard');
    }






}
