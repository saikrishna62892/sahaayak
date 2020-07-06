<div class="form-group">
		    	<label for="formGroupExampleInput">Please enter title</label>
		    	<input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Your title here..." value="{{ old('title') ?? $talk->title }}">
		    	@error('title')
		        	<small class="text-danger">{{$message}}</small>
		        @enderror
		   	</div>
		   	<div class="form-group">
			    <label for="exampleFormControlTextarea1">Please enter content</label>
			    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here..." value="{{ old('content') ?? $talk->content }}"></textarea>
			    @error('content')
		        	<small class="text-danger">{{$message}}</small>
		        @enderror
		   	</div>
			<div class="form-group">
			    <select class="custom-select" name="category" required  value="{{ old('category') ?? $talk->category }}">
			      	<option value="">Please select category...</option>
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
  				<input type="file" class="custom-file-input" id="customFile" name="image" value="{{ old('image') ?? url('storage/img/talks/'.$talk->image)}}">
  				<label class="custom-file-label" for="customFile">Please choose image...</label>
			    @error('image')
		        	<small class="text-danger">{{$message}}</small>
		        @enderror
			</div>