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
				        <h5 class="card-title" align="center">Reports</h5>
				        <p class="card-text" align="center">#Pending reports</p>
				        <h1 align="center">{{ $pending_reports }}</h1>
				        
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<br>

	<!-- trading history area start -->
	<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
	    <div class="card shadow p-4 mb-5 bg-white rounded">
	        <div class="card-body">
	            <div class="d-sm-flex justify-content-between align-items-center">
	                <h4 class="header-title">Handles</h4>
	                <div class="trd-history-tabs">
	                    <ul class="nav" role="tablist">
	                    	<li>
	                            <a class="active" data-toggle="tab" href="#list" role="tab">Appointments</a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#report" role="tab">Generate Report</a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#refer" role="tab">Refer</a>
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
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Timings</th>
                                        <th scope="col" colspan="3">Message</th>
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
									    <td colspan="3">{{$item->message}}</td>
									    <td><a href="/volunteer/appointment/{{$item->id}}/acceptAppointment" style="color: #5768ad;">Accept?</a></td>
                                    </tr>
                                    @empty
                                    <h5>No Requests Made still..</h5>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
		                </div>
		                <!-- Appointments form end -->

		                <!-- report form begin -->
		     			<div class="tab-pane fade" id="report" role="tabpanel">
		     				<div class="table-responsive">
	                            <table class="table table-hover progress-table text-center">
	                                <thead class="text-uppercase">
	                                    <tr>
	                                        <th scope="col">S.No</th>
	                                        <th scope="col">Name</th>
	                                        <th scope="col">Email</th>
	                                        <th scope="col">Phone</th>
	                                        <th scope="col">Timings</th>
	                                        <th scope="col" colspan="3">Message</th>
	                                        <th scope="col">Options</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php $count=1 ?>

	                                     @forelse($completedappointments->appointments as $key => $item)
	                                    <tr>
	                                        <td scope="row">{{ $count++ }}</td>
	                                        <td>{{$item->name}}</td>
										    <td>{{$item->email}}</td>
										    <td>{{$item->phone}}</td>
										    <td>{{$item->timings}}</td>
										    <td colspan="3">{{$item->message}}</td>
										    <?php
										    	$dtA = new DateTime();
												$dtB = new DateTime($item->timings);
											?>
										    @if($dtA > $dtB)
										    <td><button id="{{ $item->id }}#{{ $item->name }}#{{ $item->email }}" data-toggle="tab" href="#makeReport" role="tab" onClick="reply_click(this.id,)" class="btn btn-primary" style="background-color: #5768ad;">Make Report</button></td>
										    @else
										    <td style="color: lightgrey;">Making report will availabe after session completion.</td>
										    @endif
										    
	                                    </tr>
	                                    @empty
	                                    <h5>No Reports to make..</h5>
	                                    @endforelse
	                                </tbody>
	                            </table>
	                        </div>

		                </div>
		                <!-- report form end -->
						
						<!-- refer form begin -->
		                <div class="tab-pane fade" id="refer" role="tabpanel">
		                    <p align="center">For goodness sake... don't make make us beg, spread the word!<br></p>
		                     <!-- The text field -->
							<p align="center"><input  align="center" type="text" class="form-control" value="www.sahaayak.co.in" id="myInput" style="width: 16%;pointer-events:none;" disabled="disabled">

							<!-- The button used to copy the text -->
							<button onclick="myFunction()" style="color: #5768ad;background:none!important;border:none;">Click here the copy the URL</button> </p>
	                    </div>
	                    <!-- refer form end -->
	                    
		            </div>
		        </div>
		    </div>
		</div>
		<!--reportForm Begin-->
        <div class="tab-pane fade" id="makeReport" role="tabpanel">
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
