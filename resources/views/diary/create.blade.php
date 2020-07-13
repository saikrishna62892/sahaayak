<div class="row">
	<div class="col-lg-6 col-md-6">
        @forelse($diary as $event)
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <div align="right"><a href="#" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="#" style="color: #5768ad;">Delete</a></div>
                    <h5>{{$event->title}}</h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">Details: {{ Carbon\Carbon::parse($event->created_at)->format('d-M-Y g:h:i:s A') }}</h6><br>
                    <h6 class="card-subtitle mb-2 text-muted">{{$event->category}}</h6><br>
                    <h6>Content</h6>
                    <p align="justify">{{$event->content }}</p>
                </div>
            </div>
            <br>
        @empty
            <h4>No Events added</h4>
        @endforelse
    </div>
    <div class="col-lg-6 col-md-6">
        <h4 align="center">Post an Event</h4>
        <br><br>
        <form action="home/displaydiary" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Please enter event title</label>
                <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Your title here..." autocomplete="off" >
                @csrf
                @error('title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Please enter event content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here..." autocomplete="off" ></textarea>
                @error('content')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <select class="custom-select" name="category" required>
                    <option value="">Please select category</option>
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
            <center><button type="submit" name="action" value="add_to_diary" class="btn btn-primary" style="background-color: #5768ad;">Add to diary</button>&emsp;
            <button type="submit" name="action" value="add_to_story" class="btn btn-primary" style="background-color: #5768ad;">Add to story</button></center>
        </form>
    </div>
</div>

