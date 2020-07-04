<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col" colspan="3">Quote</th>
                        <th scope="col">Author</th>
                        <th scope="col">Inspired_from</th>
                        <th scope="col">Link</th>
                        <th scope="col" colspan="2">Options</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @forelse($shared_quotes as $quotes)
                    <tr>
                        <td scope="row">{{ $count++ }}</td>
                        <td colspan="3">{{ $quotes->Quote }}</td>
                        <td>{{ $quotes->Author }}</td>
                        <td>{{ $quotes->Inspired_from }}</td>
                        <td>
                        	<?php $link="https://".$quotes->Link ?>
                        	<a href="{{ $link }}" style="color: #5768ad;" target="_blank">Click here</a>
                        </td>
                        <td><a href="#" style="color: #5768ad;">Edit</a></td>
                        <td><a href="#" style="color: #5768ad;">Delete</a></td>
                        <td>{{ Carbon\Carbon::parse($quotes->created_at)->format('d-M-Y g:h:i:s A') }}</td>
                    </tr>
                  	@empty
						<h5>No Quotes Available</h5>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
          