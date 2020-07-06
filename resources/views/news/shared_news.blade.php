<div class="container">
	<div class="row">
		@forelse($shared_news as $news)
				<div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded" style="background-color: #f5f6fa;">
				  <div class="card-body">
				  	<div align="right"><a href="/admin/home/editNews/{{$news->id}}/articledited" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="/admin/home/deleteNews/{{$news->id}}/articledeleted" style="color: #5768ad;">Delete</a></div>
				    <h5 class="card-title">{{ $news->headline }}</h5><br>
				    <h6 class="card-subtitle mb-2 text-muted">Source: {{ $news->source }}</h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Details: {{ Carbon\Carbon::parse($news->created_at)->format('d-M-Y g:h:i:s A') }}</h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
				    <p class="card-text">{{ $news->content }}</p>
				    <?php $link="https://".$news->newsurl ?>
				    <a href="{{ $link }}" target="_blank" style="color: #5768ad;">Read more</a>
				  </div>
				</div>
			@empty
			<h5>No News Available</h5>
		@endforelse
	</div>
</div>