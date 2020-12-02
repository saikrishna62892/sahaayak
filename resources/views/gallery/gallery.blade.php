<div class="form-group">
	<label for="formGroupExampleInput">Please enter Caption of the Image</label>
	<input type="text" class="form-control" name="caption" id="formGroupExampleInput" placeholder="Your caption here..." required autocomplete="off" >
	@error('caption')
    	<small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Please enter Description of the Image</label>
    <textarea class="form-control" name="paragraph" id="exampleFormControlTextarea1" rows="2" placeholder="Your content here..." required autocomplete="off" ></textarea>
    @error('paragraph')
    	<small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="custom-file">
		<input type="file" class="custom-file-input" id="customFile" name="image" required autocomplete="off" >
		<label class="custom-file-label" for="customFile">Please choose image...</label>
    @error('image')
    	<small class="text-danger">{{$message}}</small>
    @enderror
</div>
