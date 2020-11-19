<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Profession</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @forelse($counsellors as $counsellor)
                    <tr>
                        <td scope="row">{{ $count++ }}</td>
                        <td>{{ $counsellor->name }}</td>
                        <td>{{ $counsellor->college_id }}</td>
                        <td><a href="mailto:{{ $counsellor->email }}" target="_blank" style="color: #5768ad;">{{ $counsellor->email }}</a></td>
                        <td>{{ $counsellor->profession }}</td>
                        <td><a href="/admin/home/counsellor/{{$counsellor->id}}/getDetails" style="color: #5768ad;">See Full Details</a>&emsp;
                        	<a href="/admin/home/counsellor/{{$counsellor->id}}/removeDetails" style="color: #5768ad;">Remove</a>
                        </td>
                    </tr>
                  	@empty
						<h5>No Counsellors Available</h5>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
