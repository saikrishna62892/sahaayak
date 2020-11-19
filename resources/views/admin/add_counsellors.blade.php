                    <div class="form-group">
                        <label for="name">Name of the counsellor</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Counsellor name" value="{{ old('name') ?? $newsarticle->name }}" autocomplete="off" >
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="college_id">College_ID</label>
                        <input type="text" class="form-control" name="college_id" id="college_id" aria-describedby="college_idHelp" placeholder="college_id" value="{{ old('name') ?? $newsarticle->name }}" autocomplete="off" >
                        @error('college_id')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter counsellor's email"  value="{{ old('email') ?? $newsarticle->email }}" autocomplete="off" >
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="qualification">Qualification</label>
                        <input type="text" class="form-control" name="qualification" id="qualification" aria-describedby="qualificationHelp" placeholder="Enter counsellor's qualification" value="{{ old('quaification') ?? $newsarticle->quaification }}" autocomplete="off" >
                        @error('qualification')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea type="text"class="form-control" name="bio" id="bio" rows="10" placeholder="Enter counsellor's Biodata"  autocomplete="off" >{{ old('achievements') ?? $newsarticle->achievements }}</textarea> 
                        @error('bio')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="achievements">Achievements</label>
                        <textarea type="text"class="form-control" name="achievements" id="achievements" rows="10" placeholder="Enter counsellor's achievements"  autocomplete="off" >{{ old('achievements') ?? $newsarticle->achievements }}</textarea> 
                        @error('achievements')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>                
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image1" 
                        value="{{ old('image') ?? \Storage::disk('s3')->url('uploads/news/img/'.$counsellor->image1)}}" autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose college ID</label>
                        @error('image1')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>   
                    <div class="card">
                <div class="card-body">
                   <form action="{{ route('storenews')}}" method="POST" enctype="multipart/form-data">
                    @csrf  

                    @include('news.news')  
                    &emsp;
                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Post News</button></center>
                   </form>
                </div>
            </div>