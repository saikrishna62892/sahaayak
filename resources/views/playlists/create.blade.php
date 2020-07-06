<div class="card">
    <div class="card-body">
       <form action="{{ route('createPlaylist') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('playlists.playlist')
        <!--<div class="form-group">
            <label for="playlistSource">Enter playlist source</label>
            <input type="text" class="form-control" name="playlistSource" id="playlistSource" aria-describedby="playlistSourceHelp" placeholder="Your playlist source here...">
            @error('playlistSource')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="playlistTag">Enter playlist tags</label>
            <input type="text" class="form-control" name="playlistTag" id="playlistTag" aria-describedby="playlistTagHelp" placeholder="Your playlist tags here...">
            @error('playlistTag')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="playlistURL">Enter playlist URL</label>
            <input type="text" class="form-control" name="playlistURL" id="playlistURL" aria-describedby="playlistURLHelp" placeholder="Your playlist URL here...">
            @error('playlistURL')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile">Please choose image...</label>
            @error('image')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>-->
        &emsp;
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add Playlist</button></center>
       </form>
    </div>
</div>