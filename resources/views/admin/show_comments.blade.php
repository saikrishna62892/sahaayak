<div class="main-content-inner" id="table">
    <div class="row">       
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Posted_In</th>
                        <th scope="col">Posted_By</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Options</th>
                        <th scope="col">Posted_At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @forelse($comments as $comment)
                    <tr>
                        <td scope="row">{{ $count++ }}</td>
                        <td>
                            @if($comment->learn_id == 1)
                            Depression
                            @elseif($comment->learn_id == 2)
                            Suicide
                            @elseif($comment->learn_id == 3)
                            Stress
                            @elseif($comment->learn_id == 4)
                            Stigma
                            @elseif($comment->learn_id == 5)
                            Healthy Sleep
                            @elseif($comment->learn_id == 6)
                            Mental Illness
                            @elseif($comment->learn_id == 7)
                            Hopelessness
                            @elseif($comment->learn_id == 8)
                            Fear of Loss
                            @elseif($comment->learn_id == 9)
                            Social Isolation
                            @else
                            Other Content
                            @endif
                        </td>
                        <?php $user_details = App\User::find($comment->user_id); ?>
                        <td>{{ $user_details->name }}</td>
                        <td>{{ $user_details->rollnum }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td><a href="deleteComment/{{$comment->id}}/commentdeleted" style="color: #5768ad;">Delete</a></td>
                        <td>{{ Carbon\Carbon::parse($comment->created_at)->format('d-M-Y') }}</td>
                    </tr>
                  	@empty
						<h5>No Comments Available</h5>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
