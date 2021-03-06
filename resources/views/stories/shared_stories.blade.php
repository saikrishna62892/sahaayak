<div class="container">
@forelse($user_stories as $story)
	<div class="row">
		<div class="card col-lg-12 col-md-6 shadow p-4 mb-5 bg-white rounded" style="background-color: #f5f6fa;">
		  <div class="card-body">
		  	<div align="right">&emsp;
            <a href="/user/home/deleteStory/{{$story->id}}/storydeleted" style="color: #5768ad;">Delete</a></div>
		    <h5 class="card-title">{{ $story->title }}</h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Details: {{ Carbon\Carbon::parse($story->created_at)->format('d-M-Y g:h:i:s A') }}</h6><br>
		    <!--<h6 class="card-subtitle mb-2 text-muted">Likes: {{ $story->likes }}</h6><br>-->
		    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
		    <p class="card-text" align="justify" style="white-space: pre-wrap">{{ $story->content }}</p>
		    <a href="{{ url('displayStories') }}" class="card-link" style="color: #5768ad;">See Post</a>
		  </div>
		</div>
	</div>
	<br>
	@empty
	<h5>No Stories Available</h5>
@endforelse
<div class="col-lg-12"><span>{{$user_stories->links()}}</span></div>
</div>