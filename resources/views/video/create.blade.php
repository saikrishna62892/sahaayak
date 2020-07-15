<div class="card">
    <div class="card-body">
       <form action="/admin/home/videos" method="post">
        @csrf
        @include('video.video')
        &emsp;
        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Post Video</button></center>
       </form>
    </div>
</div>