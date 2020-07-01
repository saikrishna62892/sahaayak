
@foreach($user_stories as $story)
	<div class="row">
		<div class="card" style="width: 24rem;background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title">{{ $story->title }}</h5>
		    <h6 class="card-subtitle mb-2 text-muted">Posted on: {{ $story->created_at }}&emsp;&emsp;Likes: {{ $story->likes }}</h6>
		    <p class="card-text">{{ $story->content }}</p>
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
	</div>
@endforeach