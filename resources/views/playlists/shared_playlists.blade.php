<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Source</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Link</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @forelse($shared_playlists as $playlists)
                    <tr>
                        <td scope="row">{{ $count++ }}</td>
                        <td>{{ $playlists->playlistSource }}</td>
                        <td>{{ $playlists->playlistTag }}</td>
                        <td>
                        	<?php $link="https://".$playlists->playlistURL ?>
                            <a href="{{ $link }}" style="color:#5768ad;" target="_blank">Click here</a>
                        </td>
                        <td><a href="/admin/home/editPlaylist/{{$playlists->id}}/playlistedited" style="color: #5768ad;">Edit</a></td>
                        <td><a href="deletePlaylists/{{$playlists->id}}/playlistdeleted" style="color: #5768ad;">Delete</a></td>
                        <td>{{ Carbon\Carbon::parse($playlists->created_at)->format('d-M-Y g:h:i:s A') }}</td>
                    </tr>
                  	@empty
						<h5>No Playlistss Available</h5>
					@endforelse
                </tbody>
            </table>
            <div class="col-lg-12"><span>{{$shared_playlists->links()}}</span></div>
        </div>
    </div>
</div>
