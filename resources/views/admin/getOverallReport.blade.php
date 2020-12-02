<style>
    .column {
  float: left;
  width: 33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>



<div class="container" style="border-style: solid;border-color: black;">
    <center><div class="upn"></div></center>
    <div class="row">
        <div class="card" style="padding: 20 20 20 20">
            <div class="card-header" style="color: grey;">
                <h1 align="center">NITC-Sahaayak</h1>
                <h5 align="center">we share bcoz we care</h5>
            </div>
            <p style="float:right;">Issued on: {{ Carbon\Carbon::now()->format('d-M-Y g:h:i A') }}</p><br>
            <div class="card-body">
                <h2 align="center">Sahaayak Overall Statistic Reports</h2>
                <div class="row">
                    <div class="column">
                    <center>
                        <h3 style="color: #5768ad;">Users Details</h3>
                        <?php $user_count = App\User::where('is_admin',0)->where('is_Volunteer',0)->where('is_Counsellor',0)->count(); ?>
                        <p>Users Count: {{ $user_count }}</p>
                    </center>
                    </div>
                    <div class="column">
                    <center>
                        <h3 style="color: #5768ad;">Appointments Details</h3>
                        <?php $appointments_count = App\Appointment::all()->count(); ?>
                        <p>Appointments Count: {{ $appointments_count }}</p>
                    </center>
                    </div>
                    <div class="column">
                    <center>
                        <h3 style="color: #5768ad;">Counsellors Details</h3>
                        <?php $counsellors_count = App\Counsellor::all()->count(); ?>
                        <p>Counsellors Count: {{ $counsellors_count }}</p>
                    </center>
                    </div>
                </div>
                <?php $startslots = ['00','08AM - 09AM','09AM - 10AM','10AM - 11AM','11AM - 12PM','12PM - 01PM','01PM - 02PM','02PM - 03PM','03PM - 04PM','04PM - 05PM']; ?>
                <?php $sno=1; ?>
                @forelse($counsellors as $counsellor)
                	<h2 align="center" style="color: #5768ad;">{{ $sno }}.{{ $counsellor->name }} Appointments Stats</h3>
                	<?php $sno++; ?>
                	<table style="width:100%">
		                <tr>
			                <th scope="col">S.No</th>
			                <th scope="col">User Name</th>
			                <th scope="col">Gender</th>
			                <th scope="col">College ID</th>
			                <th scope="col">Appointment Type</th>
			                <th scope="col" >Date</th>
			                <th scope="col">Slot</th>
			                <th scope="col">Status</th>
		                </tr>
		                <?php $count=1; ?>
		                <?php 
		                	$monthly_appointments_count = 0;
		                	$male_count = 0;
		                	$female_count = 0;
		                	$not_specified_count = 0; 
		                ?>
		                @forelse($counsellor->appointments as $appointment)
	                		@if($appointment->counsellor_id == $counsellor->id)
	                			<?php $monthly_appointments_count++; ?>
	                			@if($appointment->gender == "male")
	                				<?php $male_count++; ?>
	                			@elseif($appointment->gender == "female")
	                				<?php $female_count++; ?>
	                			@else
	                				<?php $not_specified_count++; ?>
	                			@endif
		                		<tr>
		                			<td align="center">{{ $count++ }}</td>
		                			<?php $user=App\User::find($appointment->user_id); ?>
		                			<td align="center">{{ $user->name }}</td>
		                			<td align="center">{{ $appointment->gender }}</td>
		                			<td align="center">{{ $user->rollnum }}</td>
		                			<td align="center">{{ $appointment->appointment_type }}</td>
		                			<td align="center">{{ $appointment->date }}</td>
		                			<td align="center">{{ $startslots[$appointment->slot] }}</td>
		                			<td align="center">
								    	@if($appointment->accept==0 && $appointment->is_Rejected==0)
								    		Pending
								    	@elseif($appointment->accept==0 && $appointment->is_Rejected==1)
								    		Rejected
								    	@elseif($appointment->is_Rescheduled==1)
								    		Rescheduled
								    	@elseif($appointment->accept==1 && $appointment->is_Completed==1)
								    		Completed
								    	@elseif($appointment->accept==1)
								    		Accepted
								    	@else
								    		---NA---
								    	@endif
								    </td>
		                		</tr>
		                	@endif
		                @empty
		                	<td colspan="8" align="center">No Appointments made</td>
		                @endforelse
		            </table>
		        	<h5 align="center">Appointments Count : {{ $monthly_appointments_count }}</h5>
		        	<h5 align="center">Male Count : {{ $male_count }} ; Female Count : {{ $female_count }} ; Not Specified Count : {{ $not_specified_count }}</h5>
                @empty
                	<h3 align="center" style="color: #5768ad;">No Counsellors Data Available</h3>  
                @endforelse
                <br>
                <small><center><a href="{{ env('APP_URL') }}/login" target="_blank">Click here to login</a></center></small>
                <p align="center" style="white-space: pre-line;color: grey;">&#169; copyright to sahaayak,All rights reserved</p>
              </div>
            </div>
    </div>
</div>


