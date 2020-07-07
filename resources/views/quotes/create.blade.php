<div class="card">
  <div class="card-body">
    <form action="/admin/home" method="POST" enctype="multipart/form-data">
    	@csrf
       	@include('quotes.quote') 
           <!--<div class="form-group">
        	<label for="formGroupExampleInput">Please enter author</label>
        	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="Your author here...">
        	@error('author')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter quote</label>
        	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="Your quote here...">
        	@error('quote')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
       	<div class="form-group">
    	    <label for="formGroupExampleInput">Inspired_from</label>
    	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from...">
    	    @error('inspired_from')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter tags</label>
        	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="Your tags here...">
          <small>For multiple tags use comma</small>
        	@error('tags')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter quote link</label>
        	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="Your link here...">
        	@error('link')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
    	  <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="Image">
          <label class="custom-file-label" for="customFile">Please choose image...</label>
          @error('image')
              <small class="text-danger">{{$message}}</small>
          @enderror
        </div> -->
        &emsp;
          <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Post Quote</button></center>
    </form>
  </div>
</div>