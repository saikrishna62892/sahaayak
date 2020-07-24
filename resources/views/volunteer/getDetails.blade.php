<div class="card">
    <div class="card-header">Details of Volunteer</div>

        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                {{$unapprovedVolunteer->name}}
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                {{$unapprovedVolunteer->phone}}
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                {{$unapprovedVolunteer->user->email}}
            </div>
            <div class="form-group">
                <label for="name">Qualification</label>
                {{$unapprovedVolunteer->qualification}}
            </div>
            <div class="form-group">
                <label for="name">work</label>
                {{$unapprovedVolunteer->work}}
            </div>
            <div class="form-group">
                <label for="name">Insight</label>
                {{$unapprovedVolunteer->insight}}
            </div>
            <div class="form-group">
                <label for="name">Queries</label>
                {{$unapprovedVolunteer->queries}}
            </div>
            <div class="form-group">
                <label for="name">Identity</label>
                <img src="{{\Storage::disk('s3')->url($unapprovedVolunteer->file1)}}">
            </div>
            <div class="form-group">
                <label for="name">Work Identity</label>
                <img src="{{\Storage::disk('s3')->url($unapprovedVolunteer->file2)}}">
            </div>
		</div>
	</div>
</div>