<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Description</th>
                        <th scope="col">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @forelse($gallery as $gal)
                    <tr>
                        <td scope="row">{{ $count++ }}</td>
                        <td>{{ $gal->caption }}</td>
                        <td>{{ $gal->paragraph }}</td>
                        <td>
                            @if(is_null($gal->image))
                                <center><img class="d-block" src="{{ asset('/img/galleries/default.jpg') }}" alt="Gallery-Image" height="50" width="75"></center>
                            @else
                                <center><img class="d-block" src="{{\Storage::disk('s3')->url($gal->image)}}" alt="Gallery-Image" height="50" width="75"></center>
                            @endif
                        </td>
                        <td><a href="deleteGallery/{{$gal->id}}/gallerydeleted" style="color: #5768ad;">Delete</a></td>
                        <td>{{ Carbon\Carbon::parse($gal->created_at)->format('d-M-Y') }}</td>
                    </tr>
                  	@empty
						<h5>No Gallery Available</h5>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
