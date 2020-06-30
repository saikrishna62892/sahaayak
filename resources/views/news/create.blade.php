            <div class="card">
                <div class="card-header">New Video</div>

                <div class="card-body">
                   <form action="{{route('storenews')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose Image for the Post...</label>
                        <div id="file-upload-filename"></div>
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="source">News source</label>
                        <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" placeholder="Enter about source">
                        <small id="sourceHelp" class="form-text text-muted">enter source info</small>
                        @error('source')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="headline">News headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" aria-describedby="headlineHelp" placeholder="Enter headline">
                        <small id="headlineHelp" class="form-text text-muted">enter news headline</small>
                        @error('headline')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">content for news</label>
                        <input type="text" class="form-control" name="content" id="content" aria-describedby="contentHelp" placeholder="Enter content">
                        <small id="contentHelp" class="form-text text-muted">enter content</small>
                        @error('content')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="newsurl">News URL</label>
                        <input type="text" class="form-control" name="newsurl" id="newsurl" aria-describedby="newsurlHelp" placeholder="Enter news URL">
                        <small id="newsurlHelp" class="form-text text-muted">enter news url.</small>
                        @error('newsURL')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                        <button  type="submit" class="btn btn-primary">Add News article</button>
                   </form>
                </div>
            </div>