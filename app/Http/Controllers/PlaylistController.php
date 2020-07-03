<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Playlist;
use Auth;
use DB;
class PlaylistController extends Controller
{
  
  public function index(){
    $playlist = Playlist::all();
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $temp.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/playlists/');
            $image->move($destinationPath, $name);
            $playlist->image=$name;
        }
        $playlist->save();
      return redirect('/admin/home');
      
    }
}
