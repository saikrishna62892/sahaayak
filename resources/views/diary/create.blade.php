<div class="row">
		<div class="col-lg-6 col-md-6>
            @forelse($diary as $event)
                <div class="card">
                    <div class="card-body">
                        <h5>{{$event->title}}</h5><br>
                        <h6 class="card-subtitle mb-2 text-muted">Posted date: {{ Carbon\Carbon::parse($event->created_at)->format('d-M-Y') }}</h6>
			            <h6 class="card-subtitle mb-2 text-muted">Posted time: {{ Carbon\Carbon::parse($event->created_at)->format('g:h:i:s A') }}</h6><br>
                        <h6>Content</h6>
                        <p>{{$event->content }}</p>
                    </div>
                </div>
            @empty
                <h4>No Events added</h4>
            @endforelse
        </div>
        <div class="col-lg-6 col-md-6>
            <form action="home/displaydiary" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Event Title</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Title of the Event">
                    @csrf
                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Event Content</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your event content here"></textarea>
                    @error('content')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <select class="custom-select" name="category" required>
                        <option value="">Select Category</option>
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
                <center><button type="submit" name="action" value="add_to_diary" class="btn btn-primary" style="background-color: #5768ad;">Add to diary</button>
                <button type="submit" name="action" value="add_to_story" class="btn btn-primary" style="background-color: #5768ad;">Add to story</button></center>
            </form>
        </div>
    </div>

