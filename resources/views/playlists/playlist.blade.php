<div class="form-group">
            <label for="playlistSource">Enter playlist source</label>
            <input type="text" class="form-control" name="playlistSource" id="playlistSource" aria-describedby="playlistSourceHelp" placeholder="Your playlist source here..." value="{{ old('playlistSource') ?? $playlist->playlistSource }}" autocomplete="off" >
            @error('playlistSource')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="playlistTag">Enter playlist tags</label>
            <input type="text" class="form-control" name="playlistTag" id="playlistTag" aria-describedby="playlistTagHelp" placeholder="Your playlist tags here..." value="{{ old('playlistTag') ?? $playlist->playlistTag }}" autocomplete="off" >
            @error('playlistTag')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="playlistURL">Enter playlist URL</label>
            <input type="text" class="form-control" name="playlistURL" id="playlistURL" aria-describedby="playlistURLHelp" placeholder="Your playlist URL here..." value="{{ old('playlistURL') ?? $playlist->playlistURL }}" autocomplete="off" >
            @error('playlistURL')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="image" value="{{ old('image') ?? url('storage/img/playlists/'.$playlist->image)}}" autocomplete="off" >
            <label class="custom-file-label" for="customFile">Please choose image...</label>
            @error('image')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>