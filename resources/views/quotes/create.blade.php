<form action="/admin/home" method="POST" enctype="multipart/form-data">
	@csrf
   	
       <div class="form-group">
    	<label for="formGroupExampleInput">Author</label>
    	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="author">
    	@error('author')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
       <div class="form-group">
    	<label for="formGroupExampleInput">Quote</label>
    	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="quote">
    	@error('quote')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
   	<div class="form-group">
	    <label for="formGroupExampleInput">Inspired_from</label>
	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from">
	    @error('inspired_from')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
       <div class="form-group">
    	<label for="formGroupExampleInput">Tags</label>
    	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="tags">
    	@error('tags')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
       <div class="form-group">
    	<label for="formGroupExampleInput">Link</label>
    	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="link">
    	@error('link')
        	<small class="text-danger">{{$message}}</small>
        @enderror
   	</div>
	<div class="custom-file">
	    <input type="file" class="custom-file-input" name="Image" id="file-upload">
	    <label class="custom-file-label" for="validatedCustomFile">Choose Image for the Post...</label>
	    <div id="file-upload-filename"></div>
	    @error('image')
        	<small class="text-danger">{{$message}}</small>
        @enderror
	</div>
	<center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Create</button></center>
</form>