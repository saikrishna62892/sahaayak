<div class="container">
@forelse($shared_news as $news)
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title">{{ $news->headline }}</h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Source: {{ $news->source }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted date: {{ Carbon\Carbon::parse($news->created_at)->format('d-M-Y') }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Posted time: {{ Carbon\Carbon::parse($news->created_at)->format('g:h:i:s A') }}</h6><br>
		    <h6 class="card-subtitle mb-2 text-muted">Content:</h6>
		    <p class="card-text">{{ $news->content }}</p>
		    <a href="{{ $news->newsurl }}" class="card-link" target="_blank">Read more</a>
		  </div>
		</div>
	</div>
	<br>
	@empty
	<h5>No News Available</h5>
@endforelse
	</div>