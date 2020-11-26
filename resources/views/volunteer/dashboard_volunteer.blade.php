@extends('layouts.dashboard')

@section('name')
    {{ $volunteer->name }}
@endsection
	@section('content')
	<br>	
	<div class="container" id="stats">
		<div class="row">
			<div class="col-sm-3">
				<div class="card shadow p-4 mb-5 bg-white rounded">
					<div class="card-body">
						<h5 class="card-title" align="center">Checkins</h5>
						<p class="card-text" align="center">#Logins</p>
						<h1 align="center">{{ $checkins }}</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
			    <div class="card shadow p-4 mb-5 bg-white rounded">
			        <div class="card-body">
				        <h5 class="card-title" align="center">Sessions</h5>
				        <p class="card-text" align="center">#Interactions</p>
				        <h1 align="center">{{ $interactions }}</h1>
			        </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card shadow p-4 mb-5 bg-white rounded">
				    <div class="card-body">
				        <h5 class="card-title" align="center">Requests</h5>
				        <p class="card-text" align="center">#Yet to accept</p>
				        <h1 align="center">{{ $requests }}</h1>
				    </div>
				</div>
			</div>
			<div class="col-sm-3">
			    <div class="card shadow p-4 mb-5 bg-white rounded">
			        <div class="card-body">
				        <h5 class="card-title" align="center">Case Histories</h5>
				        <p class="card-text" align="center">#Case histories</p>
				        <h1 align="center">{{ $casehistory_count }}</h1>
				        
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<!-- flash messages section begin -->
    <div class="flash-message">
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <center><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p></center>
        @endif
      @endforeach
    </div>
	<!-- flash messages section end -->

	<!-- trading history area start -->
	<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
	    <div class="card shadow p-4 mb-5 bg-white rounded">
	        <div class="card-body">
	            <div class="d-sm-flex justify-content-between align-items-center">
	                <h4 class="header-title">Handles</h4>
	                <div class="trd-history-tabs">
	                    <ul class="nav" role="tablist">
	                    	<li>
	                            <a class="active" data-toggle="tab" href="#list" role="tab">All Appointments</a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#casehistory" role="tab">My appointments</a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#reports" role="tab">Reports</a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
		        <div class="trad-history mt-4">
		            <div class="tab-content" id="myTabContent">
		                <!-- Appointments form begin -->
		                <div class="tab-pane fade show active" id="list" role="tabpanel">
								<div class="table-responsive">
                            	<table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">College ID</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Faculty Advisor</th>
                                        <th scope="col">Appointment Type</th>
                                        <th scope="col" >Date</th>
                                        <th scope="col">Slot</th>
                                        <th scope="col">Message</th>
                                        <th scope="col" colspan="3">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1 ?>
                                    @forelse($appointments as $item)
                                    	<?php $user_email=App\User::find($item->user_id)->email; ?>
                                    <tr>
                                        <td scope="row">{{ $count++ }}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->college_id}}</td>
                                        <td>{{$item->gender}}</td>
									    <td>{{$user_email}}</td>
									    <td>{{$item->department}}</td>
									    <td>{{$item->faculty_advisor}}</td>
									    <td>{{$item->appointment_type}}</td>
									    <td>{{$item->date}}</td>
									    @if($item->slot==1)
									    	<td>8AM - 9AM</td>
									    @elseif($item->slot==2)
									    	<td>9AM - 10AM</td>
									    @elseif($item->slot==3)
									    	<td>10AM - 11AM</td>
									    @elseif($item->slot==4)
									    	<td>11AM - 12PM</td>
									    @elseif($item->slot==5)
									    	<td>12PM - 1PM</td>
									    @elseif($item->slot==6)
									    	<td>1PM - 2PM</td>
									    @elseif($item->slot==7)
									    	<td>2PM - 3PM</td>
									    @elseif($item->slot==8)
									    	<td>3PM - 4PM</td>
									    @elseif($item->slot==9)
									    	<td>4PM - 5PM</td>
									    @else
									    	<td> ------ </td>
									    @endif
									    <td>{{$item->message}}</td>
									    <td align="center">
									    	<a class="btn btn-success" href="/counsellor/appointment/{{$item->id}}/acceptAppointment">Accept Appointment?</a>&emsp;
									    </td>
									    <td align="center">
									    	<a class="btn btn-danger" href="/counsellor/appointment/{{$item->id}}/rejectAppointment">Reject Appointment?</a>&emsp;
									    </td>
									    <td align="center">
									    	<a class="btn btn-warning" href="/counsellor/appointment/{{$item->id}}/1/rescheduleAppointment" style="color: #fff;">Reschedule & Accept!</a>
									    </td>
                                    </tr>
                                    @empty
                                    <h5>No Requests Made still..</h5>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
		                </div>
		                <!-- Appointments form end -->

		                <!-- My appointments -->
		     			<div class="tab-pane fade" id="casehistory" role="tabpanel">
		     				<div class="table-responsive">
	                            <table class="table table-hover progress-table text-center">
	                                <thead class="text-uppercase">
	                                    <tr>
	                                        <th scope="col">S.No</th>
	                                        <th scope="col">Name</th>
	                                        <th scope="col">College ID</th>
	                                        <th scope="col">Gender</th>
	                                        <th scope="col">Email</th>
	                                        <th scope="col">Department</th>
	                                        <th scope="col">Faculty Advisor</th>
	                                        <th scope="col">Appointment Type</th>
	                                        <th scope="col" >Date</th>
	                                        <th scope="col">Slot</th>
	                                        <th scope="col">Message</th>
	                                        <th scope="col" colspan="3">Options</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php $count=1 ?>

	                                     @forelse($completedappointments as $key => $item)
	                                     <?php $user_email=App\User::find($item->user_id)->email; ?>
	                                    <tr>
	                                        <td scope="row">{{ $count++ }}</td>
	                                        <td>{{$item->name}}</td>
	                                        <td>{{$item->college_id}}</td>
	                                        <td>{{$item->gender}}</td>
										    <td>{{$user_email}}</td>
										    <td>{{$item->department}}</td>
										    <td>{{$item->faculty_advisor}}</td>
										    <td>{{$item->appointment_type}}</td>
										    <td >{{$item->date}}</td>
										    @if($item->slot==1)
										    	<td>8AM - 9AM</td>
										    @elseif($item->slot==2)
										    	<td>9AM - 10AM</td>
										    @elseif($item->slot==3)
										    	<td>10AM - 11AM</td>
										    @elseif($item->slot==4)
										    	<td>11AM - 12PM</td>
										    @elseif($item->slot==5)
										    	<td>12PM - 1PM</td>
										    @elseif($item->slot==6)
										    	<td>1PM - 2PM</td>
										    @elseif($item->slot==7)
										    	<td>2PM - 3PM</td>
										    @elseif($item->slot==8)
										    	<td>3PM - 4PM</td>
										    @elseif($item->slot==9)
										    	<td>4PM - 5PM</td>
										    @else
										    	<td> ------ </td>
										    @endif
										    <td>{{$item->message}}</td>
										    <?php
										    	$endslots =   ['00','09','10','11','12','13','14','15','16','17'];
        										$dtB = Carbon\Carbon::parse($item->date.' '.$endslots[$item->slot].':00:00');
										    	$dtA = Carbon\Carbon::now();
											?>
										    @if($dtA > $dtB)
										    <td><button id="{{ $item->college_id }}#{{ $item->name }}#{{ $user_email }}#{{ $item->id }}" data-toggle="tab" href="#makereport" role="tab" onClick="reply_click(this.id,)" class="btn btn-primary" style="background-color: #5768ad;">Add Case History</button></td>
										    @else
										    <td style="color: lightgrey;">Make report will availabe after session completion.</td>
										    @endif

										    <td><a target="_blank" href="/counsellor/appointment/{{$item->user_id}}/getCaseHistory" class="btn btn-primary" style="background-color: #5768ad;">Get {{ $item->name }} Report</a></td>
										   	<!-- href="/counsellor/appointment/{{$item->id}}/rescheduleAppointment" -->
										   	<!--@if($dtA < $dtB)
										    <td><a class="btn btn-primary" href="/counsellor/appointment/{{$item->id}}/2/rescheduleAppointment" style="background-color: #5768ad;">Reschedule {{ $item->name }} Appointment!</a></td>
										    @else
										    <td style="color: lightgrey;">Can't Reschedule Now</td>
										    @endif-->
	                                    </tr>
	                                    @empty
	                                    <h5>No Reports to make..</h5>
	                                    @endforelse
	                                </tbody>
	                            </table>
	                        </div>

		                </div>
		                <!-- report form end -->


		                <!-- Case history form begin -->
		                <!--<div class="tab-pane fade show active" id="casehistory" role="tabpanel">
								<div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Timings</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1 ?>
                                    @forelse($appointments as $item)
                                    <tr>
                                        <td scope="row">{{ $count++ }}</td>
                                        <td>{{$item->name}}</td>
									    <td>{{$item->email}}</td>
									    <td>{{$item->phone}}</td>
									    <td>{{$item->timings}}</td>
									    <td>{{$item->message}}</td>
									    <td><a href="/volunteer/appointment/{{$item->id}}/acceptAppointment" style="color: #5768ad;">Accept?</a></td>
                                    </tr>
                                    @empty
                                    <h5>No Requests Made still..</h5>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
		                </div>-->

		              


		                <!-- Case history form end -->

		                <!-- reports form begin -->
		                <div class="tab-pane fade" id="reports" role="tabpanel">
		                    <div class="card">
       					    <div class="card-header">Enter College ID to get History</div>

					        <div class="card-body">
        				    <form action="/counsellor/appointment/downloadReport" method="get" target="_blank">
            				@csrf
            				<div class="form-group">
							    <label for="college_id">Please Enter College ID of the User</label>
							    <input type="text" class="form-control" name="college_id" id="college_id" aria-describedby="college_idDHelp" placeholder="User CollegeID here.." required autocomplete="off" >
							    @error('college_id')
							    <small class="text-danger">{{$message}}</small>
							    @enderror
							</div>
               				  <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Download Repoort</button></center>
               				</form>
        					</div>
    						</div>
	                    </div>
	                    <!-- reports form end -->

	                    
		            </div>
		        </div>
		    </div>
		</div>


		<!--reportForm Begin-->
        <div class="tab-pane fade" id="makereport" role="tabpanel">
        	@include('appointment.reportForm')
        </div>
        <!--reportForm end-->
	</div>
	<!-- trading history area end -->
<script>
	function myFunction() {
	  /* Get the text field */
	  var copyText = document.getElementById("myInput");

	  /* Select the text field */
	  copyText.select();
	  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

	  /* Copy the text inside the text field */
	  document.execCommand("copy");

	  /* Alert the copied text */
	  alert("Copied the text: " + copyText.value);
	} 
</script>

@endsection 
