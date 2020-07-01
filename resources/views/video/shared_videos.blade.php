<div class="container">
	<div class="row">
@forelse($shared_videos as $video)
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title">{{ $video->videoSource }}</h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Tags: {{ $video->videoTag }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted date: {{ Carbon\Carbon::parse($video->created_at)->format('d-M-Y') }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted time: {{ Carbon\Carbon::parse($video->created_at)->format('g:h:i:s A') }}</h6><br>
		    <h6 class="card-subtitle mb-2 text-muted">URL: <a href="{{ $video->videoURL }}" target="_blank">{{ $video->videoURL }}</a></h6>
		  </div>
		</div>
	<br>
	@empty
	<h5>No Videos Available</h5>
@endforelse
</div>
</div>