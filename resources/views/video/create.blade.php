<div class="card">
    <div class="card-body">
       <form action="/admin/home/videos" method="post">
        @csrf
        <div class="form-group">
            <label for="videoSource">Please enter video source</label>
            <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Your video source here...">
            @error('videoSource')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="videoTag">Please enter video tags</label>
            <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Your video tags here...">
            @error('videoTag')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="videoURL">Please enter video URL</label>
            <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Your video URL here...">
            @error('videoURL')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        &emsp;
        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Post Video</button></center>
       </form>
    </div>
</div>