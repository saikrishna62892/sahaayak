        <div class="form-group">
            <label for="videoSource">Please enter video source</label>
            <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Your video source here..." value="{{ old('videoSource') ?? $video->videoSource }}">
            @error('videoSource')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="videoTag">Please enter video tags</label>
            <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Your video tags here..." value="{{ old('videoTag') ?? $video->videoTag }}">
            @error('videoTag')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="videoURL">Please enter video URL</label>
            <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Your video URL here..." value="{{ old('videoURL') ?? $video->videoURL }}">
            @error('videoURL')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>