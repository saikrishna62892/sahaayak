<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Source</th>
                        <th scope="col" colspan="2">Tags</th>
                        <th scope="col">Link</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @forelse($shared_videos as $video)
                    <tr>
                        <td scope="row">{{ $count++ }}</td>
                        <td>{{ $video->videoSource }}</td>
                        <td colspan="2">{{ $video->videoTag }}</td>
                        <td><a href="{{ $video->videoURL }}" target="_blank" style="color: #5768ad;">Click here</a></td>
                        <td><a href="/admin/home/editVideo/{{$video->id}}/videoedited" style="color: #5768ad;">Edit</a></td>
                        <td><a href="deleteVideo/{{$video->id}}/videodeleted" style="color: #5768ad;">Delete</a></td>
                        <td>{{ Carbon\Carbon::parse($video->created_at)->format('d-M-Y g:h:i:s A') }}</td>
                    </tr>
                  	@empty
						<h5>No Videos Available</h5>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
