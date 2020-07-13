<div class="container">
	<div class="row">
	@forelse($talks as $talk)
			<div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded" style="background-color: #f5f6fa;">
			  	<div class="card-body">
			  		<div align="right"><a href="/admin/home/editTalk/{{$talk->id}}/talkedited" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="deleteTalk/{{$talk->id}}/talkdeleted" style="color: #5768ad;">Delete</a></div>
				    <h5 class="card-title">{{ $talk->title }}</h5><br>

				    <h6 class="card-subtitle mb-2 text-muted">Details: {{ Carbon\Carbon::parse($talk->created_at)->format('d-M-Y g:h:i:s A') }}</h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Likes: {{ $talk->likes }}</h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
				    <p class="card-text" align="justify" style="white-space: pre-wrap">{{ $talk->content }}</p>
				    <a href="/displayTalks" style="color: #5768ad;">See Post</a>
			  </div>
			</div>
		<br>
		@empty
		<h5>No Talks Available</h5>
	@endforelse
	<div class="col-lg-12"><span>{{$talks->links()}}</span></div>
	</div>
</div>