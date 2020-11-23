<div class="card">
    <div class="card-body">
		<form action="{{ route('addGalleryFields') }}" method="POST" enctype="multipart/form-data">
			@csrf
			@include('gallery.gallery')
			&emsp;
				<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Post Image</button></center>
		</form>
	</div>
</div>