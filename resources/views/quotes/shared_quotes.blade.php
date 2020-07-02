<div class="container">
@forelse($shared_quotes as $quotes)
	<div class="row">
		<div class="col-lg-12 col-md-6 card" style="background-color: #f5f6fa;">
		  <div class="card-body">
		    <h5 class="card-title">{{ $quotes->Inspired_from }}</h5><br>
		    <h6 class="card-subtitle mb-2 text-muted">Author: {{ $quotes->Author }}</h6>
		    <h6 class="card-subtitle mb-2 text-muted">Quote:</h6>
		    <p class="card-text">{{ $quotes->Quote }}</p>
		    <a href="{{ $quotes->Link }}" class="card-link" target="_blank">Read more</a>
		  </div>
		</div>
	</div>
	<br>
	@empty
	<h5>No Quotes Available</h5>
@endforelse
	</div>