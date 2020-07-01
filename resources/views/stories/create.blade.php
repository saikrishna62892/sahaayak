<form action="{{ route('addFields') }}" method="POST" enctype="multipart/form-data">
	@csrf
   	<div class="form-group">
    	<label for="formGroupExampleInput">Title of the Story</label>
    	<input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Title of the Post">
    	@error('title')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
   	<div class="form-group">
	    <label for="exampleFormControlTextarea1">Content</label>
	    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here"></textarea>
	    @error('content')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
	<div class="form-group">
	    <select class="custom-select" name="category" required>
	      	<option value="">Select Category</option>
	      	<option value="Depression">Depression</option>
	      	<option value="Suicide">Suicide</option>
	      	<option value="Stress">Stress</option>
	      	<option value="Stigma">Stigma</option>
	      	<option value="Healthy Sleep">Healthy Sleep</option>
	      	<option value="Mental Illness">Mental Illness</option>
	     	<option value="Hopelessness">Hopelessness</option>
	     	<option value="Fear of Loss">Fear of Loss</option>
	     	<option value="Social Isolation">Social Isolation</option>
	    </select>
	    @error('category')
        	<small class="text-danger">{{$message}}</small>
        @enderror
	</div>
	<div class="custom-file">
	    <input type="file" class="custom-file-input" name="image" id="file-upload">
	    <label class="custom-file-label" for="validatedCustomFile">Choose Image for the Post...</label>
	    <div id="file-upload-filename"></div>
	    @error('image')
        	<small class="text-danger">{{$message}}</small>
        @enderror
	</div>
	<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
</form>