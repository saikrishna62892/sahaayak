    <div class="form-group">
        	<label for="formGroupExampleInput">Please enter author</label>
        	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="Your author here..." value="{{ old('Author') ?? $quote->Author }}">
        	@error('author')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter quote</label>
        	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="Your quote here..." value="{{ old('Quote') ?? $quote->Quote }}">
        	@error('quote')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
       	<div class="form-group">
    	    <label for="formGroupExampleInput">Inspired_from</label>
    	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from..." value="{{ old('Inspired_from') ?? $quote->Inspired_from }}">
    	    @error('inspired_from')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter tags</label>
        	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="Your tags here..." value="{{ old('Tag') ?? $quote->Tag }}">
          <small>For multiple tags use comma</small>
        	@error('tags')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter quote link</label>
        	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="Your link here..." value="{{ old('Link') ?? $quote->Link }}">
        	@error('link')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
    	  <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="Image" value="{{ old('Image') ?? url('storage/img/quotes/'.$quote->Image)}}">
          <label class="custom-file-label" for="customFile">Please choose image...</label>
          @error('image')
              <small class="text-danger">{{$message}}</small>
          @enderror
        </div>