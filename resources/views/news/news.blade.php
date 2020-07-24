                    <div class="form-group">
                        <label for="source">Please enter source</label>
                        <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" placeholder="Your news source here..." value="{{ old('source') ?? $newsarticle->source }}" autocomplete="off" >
                        @error('source')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="headline">Please enter headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" aria-describedby="headlineHelp" placeholder="Your news headline here..."  value="{{ old('headline') ?? $newsarticle->headline }}" autocomplete="off" >
                        @error('headline')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Please enter content</label>
                        <textarea type="text"class="form-control" name="content" id="content" rows="10" placeholder="Your content here..." value="{{ old('content') ?? $newsarticle->content }}" autocomplete="off" ></textarea> 
                        @error('content')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="newsurl">Please enter news URL</label>
                        <input type="text" class="form-control" name="newsurl" id="newsurl" aria-describedby="newsurlHelp" placeholder="Your news URL here..." value="{{ old('newsurl') ?? $newsarticle->newsurl }}" autocomplete="off" >
                        @error('newsURL')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image" 
                        value="{{ old('image') ?? \Storage::disk('s3')->url('uploads/news/img/'.$newsarticle->image)}}" autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose image...</label>
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>