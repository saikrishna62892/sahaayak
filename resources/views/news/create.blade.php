            <div class="card">
                <div class="card-body">
                   <form action="{{route('storenews')}}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    <div class="form-group">
                        <label for="source">Source</label>
                        <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" placeholder="Enter News Source">
                        @error('source')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="headline">Headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" aria-describedby="headlineHelp" placeholder="Enter Headline of the News">
                        @error('headline')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea type="text"class="form-control" name="content" id="content" rows="10" placeholder="Enter Content"></textarea>
                        @error('content')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="newsurl">News URL</label>
                        <input type="text" class="form-control" name="newsurl" id="newsurl" aria-describedby="newsurlHelp" placeholder="Enter News URL">
                        @error('newsURL')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="file-upload">
                        <label class="custom-file-label" for="file-upload">Choose Image for the News...</label>
                        <div id="file-upload-filename"></div>
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add News article</button></center>
                   </form>
                </div>
            </div>