<div class="table-responsive">
    <table class="table table-hover progress-table text-center">
        <thead class="text-uppercase">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col" colspan="2">Appointment Type</th>
                <th scope="col" >Date</th>
                <th scope="col" colspan="2">Slot</th>
                <th scope="col" colspan="2">Alloted to</th>
                <th scope="col" colspan="3">Message</th>
                <th scope="col" colspan="3">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $count=1 ?>
            @forelse($user->appointments as $item)
            <tr>
                <td scope="row">{{ $count++ }}</td>
			    <td colspan="2">{{$item->appointment_type}}</td>
			    <td>{{$item->date}}</td>
			    @if($item->slot==1)
			    	<td colspan="2">8AM - 9AM</td>
			    @elseif($item->slot==2)
			    	<td colspan="2">9AM - 10AM</td>
			    @elseif($item->slot==3)
			    	<td colspan="2">10AM - 11AM</td>
			    @elseif($item->slot==4)
			    	<td colspan="2">11AM - 12PM</td>
			    @elseif($item->slot==5)
			    	<td colspan="2">12PM - 1PM</td>
			    @elseif($item->slot==6)
			    	<td colspan="2">1PM - 2PM</td>
			    @elseif($item->slot==7)
			    	<td colspan="2">2PM - 3PM</td>
			    @elseif($item->slot==8)
			    	<td colspan="2">3PM - 4PM</td>
			    @elseif($item->slot==9)
			    	<td colspan="2">4PM - 5PM</td>
			    @else
			    	<td> ---NA--- </td>
			    @endif
			    <?php $counsellor_name = App\Counsellor::find($item->counsellor_id)->name; ?>
			    <td colspan="2">{{ $counsellor_name }}</td>
			    <td colspan="3">{{$item->message}}</td>
			    <td>
			    	@if($item->accept==0)
			    		<a href="#" class="btn btn-warning"> Pending </a>
			    	@elseif($item->is_Completed==0)
			    		<a href="#" class="btn btn-info"> Accepted </a>
			    	@elseif($item->is_Completed==1)
			    		<a href="#" class="btn btn-success">Completed </a>
			    	@else
			    		---NA---
			    	@endif
			    </td>
            </tr>
            @empty
            <h5>No Requests Made still..</h5>
            @endforelse
        </tbody>
    </table>
</div>