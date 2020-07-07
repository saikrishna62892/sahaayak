<div class="container">
	<div class="row">
		@forelse($suggestions as $suggestion)
				<div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded">
				  <div class="card-body">
				    <h6 class="card-subtitle mb-2 text-muted">Name: {{ $suggestion->name }}</h6>
				    <h6 class="card-subtitle mb-2 text-muted">Email: {{ $suggestion->email }}</h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Details: {{ Carbon\Carbon::parse($suggestion->timestamp)->format('d-M-Y') }}</h6><br>
				    <h6 class="card-subtitle mb-2 text-muted">Comment:</h6>
				    <p class="card-text" align="justify">{{ $suggestion->comment }}</p>
				  </div>
				</div>
			@empty
			<h5>No Suggestions Available</h5>
		@endforelse
	</div>
</div>