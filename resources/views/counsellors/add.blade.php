                    <div class="form-group">
                        <label for="name">Name of the Counsellor</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Please enter Counsellor name"  autocomplete="off" >
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="college_id">College ID</label>
                        <input type="text" class="form-control" name="college_id" id="college_id" aria-describedby="college_idHelp" placeholder="Please enter College ID"  autocomplete="off" >
                        @error('college_id')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Please enter Counsellor's email"  autocomplete="off" >
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text" class="form-control" name="profession" id="profession" aria-describedby="professionHelp" placeholder="Please enter Counsellor's profession" autocomplete="off" >
                        @error('profession')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bio">Add Bio</label>
                        <textarea type="text"class="form-control" name="bio" id="bio" rows="5" placeholder="Please enter Counsellor's Bio"  autocomplete="off" > </textarea> 
                        @error('bio')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="achievements">Achievements</label>
                        <textarea type="text"class="form-control" name="achievements" id="achievements" rows="5" placeholder="Please enter Counsellor's achievements"  autocomplete="off" > </textarea> 
                        @error('achievements')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>                
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image"  autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose profile picture</label>
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>