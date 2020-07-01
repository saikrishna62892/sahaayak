
<div class="container">
@forelse($user_stories as $story)
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title">{{ $story->title }}</h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Posted date: {{ Carbon\Carbon::parse($story->created_at)->format('d-M-Y') }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted time: {{ Carbon\Carbon::parse($story->created_at)->format('g:h:i:s A') }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Likes: {{ $story->likes }}</h6><br>
		    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
		    <p class="card-text">{{ $story->content }}</p>
		    <a href="#" class="card-link">See Post</a>
		  </div>
		</div>
	</div>
	<br>
	@empty
	<h5>No Stories Available</h5>
@endforelse
	</div>