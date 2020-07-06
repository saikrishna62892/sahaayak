@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit Playlist</h4>

        <div class="card-body">
           <form action="/admin/home/editPlaylist/{{$playlist->id}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('playlists.playlist')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit Playlist</button></center>
           </form>
        </div>
    </div>
</div>
@endsection