
<div class="container">
	@forelse($talks as $talk)
		<div class="row">
			<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
			  <div class="card-body">
			    <h5 class="card-title">{{ $talk->title }}</h5><br>
			    <h6 class="card-subtitle mb-2 text-muted">Posted date: {{ Carbon\Carbon::parse($talk->created_at)->format('d-M-Y') }}</h6>
			    <h6 class="card-subtitle mb-2 text-muted">Posted time: {{ Carbon\Carbon::parse($talk->created_at)->format('g:h:i:s A') }}</h6>
			    <h6 class="card-subtitle mb-2 text-muted">Likes: {{ $talk->likes }}</h6><br>
			    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
			    <p class="card-text">{{ $talk->content }}</p>
			    <a href="#" class="card-link">See Post</a>
			  </div>
			</div>
		</div>
		<br>
		@empty
		<h5>No Talks Available</h5>
	@endforelse
</div>