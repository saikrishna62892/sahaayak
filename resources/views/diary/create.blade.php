<div class="row">
	<div class="col-lg-6 col-md-6">
        @forelse($diary as $event)
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <div align="right"><a href="/user/home/editEvent/{{$event->id}}/eventedited" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="/user/home/deleteEvent/{{$event->id}}/eventdeleted" style="color: #5768ad;">Delete</a></div>
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
        <div class="col-lg-12"><span>{{$diary->links()}}</span></div>
    </div>
    
   <div class="col-lg-6 col-md-6">
        <h4 align="center">Post an Event</h4>
        <br><br>
        <form action="home/displaydiary" method="POST" enctype="multipart/form-data">
            @csrf
            @include('diary.diary') 
            &emsp;
            <center><button type="submit" name="action" value="add_to_diary" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Event added Succesfully')">Add to diary</button><br><br>
            <button type="submit" name="action" value="add_to_story" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Add to story</button></center>
        </form>
    </div>
</div>

