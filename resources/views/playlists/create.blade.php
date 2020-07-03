<div class="card">
    <div class="card-body">
       <form action="{{ route('createPlaylist') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="playlistSource">Source of the Playlist</label>
            <input type="text" class="form-control" name="playlistSource" id="playlistSource" aria-describedby="playlistSourceHelp" placeholder="Enter the playlist source">
            @error('playlistSource')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="playlistTag">Playlist Tags</label>
            <input type="text" class="form-control" name="playlistTag" id="playlistTag" aria-describedby="playlistTagHelp" placeholder="Enter playlist Tags separated by comma">
            @error('playlistTag')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="playlistURL">Playlist URL</label>
            <input type="text" class="form-control" name="playlistURL" id="playlistURL" aria-describedby="playlistURLHelp" placeholder="Enter playlist URL">
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
        </div>
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add Playlist</button></center>
       </form>
    </div>
</div>