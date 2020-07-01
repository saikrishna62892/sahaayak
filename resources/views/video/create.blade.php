<div class="card">
    <div class="card-body">
       <form action="/admin/home/videos" method="post">
        @csrf
        <div class="form-group">
            <label for="videoSource">Source of the Video</label>
            <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Enter Video Source">
            @error('videoSource')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="videoTag">Video Tags</label>
            <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Enter Video Tags separated by comma">
            @error('videoTag')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="videoURL">Video URL</label>
            <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Enter Video URL">
            @error('videoURL')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add Video</button></center>
       </form>
    </div>
</div>