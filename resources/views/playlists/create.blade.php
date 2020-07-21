<div class="card">
    <div class="card-body">
       <form action="{{ route('createPlaylist') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('playlists.playlist')
        &emsp;
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Add Playlist</button></center>
       </form>
    </div>
</div>