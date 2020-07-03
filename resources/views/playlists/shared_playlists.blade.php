<div class="container">
@forelse($shared_playlists as $playlists)
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title">{{ $playlists->playlistSource }}</h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Tags: {{ $playlists->playlistTag }}</h6>
		    
			<p> URL: <?php $link="https://$playlists->playlistURL" ?>
                            <p><a href="{{ $link }}" style="color:#5768ad;" target="_blank">Click Here</a></p></p>
		  </div>
		</div>
	</div>
	<br>
	@empty
	<h5>No Playlists Available</h5>
@endforelse
	</div>