    <div class="form-group">
        	<label for="formGroupExampleInput">Please enter author</label>
        	<input type="text" class="form-control" name="Author" id="formGroupExampleInput" placeholder="Your author here..." value="{{ old('Author') ?? $quote->Author }}" autocomplete="off" >
        	@error('author')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter quote</label>
        	<input type="text" class="form-control" name="Quote" id="formGroupExampleInput" placeholder="Your quote here..." value="{{ old('Quote') ?? $quote->Quote }}" autocomplete="off" >
        	@error('quote')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
       	<div class="form-group">
    	    <label for="formGroupExampleInput">Inspired_from</label>
    	    <input type="text" class="form-control" name="Inspired_from" id="formGroupExampleInput" placeholder="inspired_from..." value="{{ old('Inspired_from') ?? $quote->Inspired_from }}" autocomplete="off" >
    	    @error('inspired_from')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter tags</label>
        	<input type="text" class="form-control" name="Tag" id="formGroupExampleInput" placeholder="Your tags here..." value="{{ old('Tag') ?? $quote->Tag }}" autocomplete="off" >
          <small>For multiple tags use comma</small>
        	@error('tags')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
           <div class="form-group">
        	<label for="formGroupExampleInput">Please enter quote link</label>
        	<input type="text" class="form-control" name="Link" id="formGroupExampleInput" placeholder="Your link here..." value="{{ old('Link') ?? $quote->Link }}" autocomplete="off" >
        	@error('link')
            	<small class="text-danger">{{$message}}</small>
            @enderror
       	</div>
    	  <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="Image" value="{{ old('Image') ?? \Storage::disk('s3')->url('uploads/quote/img/'.$quote->Image)}}" autocomplete="off" >
          <label class="custom-file-label" for="customFile">Please choose image...</label>
          @error('Image')
              <small class="text-danger">{{$message}}</small>
          @enderror
        </div>