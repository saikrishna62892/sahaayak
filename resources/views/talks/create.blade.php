<div class="card">
    <div class="card-body">
		<form action="{{ route('addTalksFields') }}" method="POST" enctype="multipart/form-data">
			@csrf
			@include('talks.talk')
			&emsp;
				<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Post Talk</button></center>
		</form>
	</div>
</div>