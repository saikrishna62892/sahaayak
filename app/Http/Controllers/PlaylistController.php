<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Playlist;
use Auth;
use DB;
class PlaylistController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['is_user'])->only(['index']);
        $this->middleware(['is_admin'])->only(['save','deleteplaylist','editplaylist','update']);
    }

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

    public function deleteplaylist(Playlist $playlist){
        $playlist->delete();
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
            $image = request()->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/playlists/');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        $playlist->update($data);
        return redirect()->route('adminDashboard');
    }






}
