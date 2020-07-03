@extends('layouts.dashboard')
	@section('content')
	<br>	
	<div class="container" id="stats">
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Checkins</h5>
						<h1 align="center">2000</h1>
						<p class="card-text">Number of times logged into sahaayak.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
			    <div class="card">
			        <div class="card-body">
				        <h5 class="card-title">Posts</h5>
				        <h1 align="center">300</h1>
				        <p class="card-text">Num of posts posted in the website</p>
			        </div>
			    </div>
			</div>
			<div class="col-sm-3">
			    <div class="card">
			        <div class="card-body">
				        <h5 class="card-title">Talks</h5>
				        <h1 align="center">100</h1>
				        <p class="card-text">Number of times talked to users</p>
			        </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
				    <div class="card-body">
				        <h5 class="card-title">Pending Requests</h5>
				        <h1 align="center">50</h1>
				        <p class="card-text">Number of users yet to talk with the volunteer</p>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<!-- trading history area start -->
	<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
	    <div class="card">
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
		                    <table class="table table-striped table-responsive-md btn-table">

								<thead>
								  <tr>
								    <th>Sno.</th>
								    <th>Name</th>
								    <th>Email</th>
								    <th>Phone</th>
								    <th>Timing</th>
								    <th>Message</th>
								    <th>Accept Request</th>
								    <th>Session Completed</th>
								  </tr>
								</thead>

								<tbody>
								  @foreach($appointments as $item)
								  <tr>
								    <th scope="row">3</th>
								    <td>{{$item->name}}</td>
								    <td>{{$item->email}}</td>
								    <td>{{$item->phone}}</td>
								    <td>{{$item->timings}}</td>
								    <td>{{$item->message}}</td>
								    <td>
								     <!-- <button type="button" onclick="" class="btn btn-primary" style="background-color: #5768ad; ">Accept Request</button> -->
								      <a href="/volunteer/appointment/{{$item->id}}/acceptAppointment" class="btn btn-dark">Accept Request</a>
								    </td>
								  </tr>
								  @endforeach
								</tbody>

								</table>
		                </div>
		                <!-- Appointments form end -->

		                <!-- report form begin -->
		     			<div class="tab-pane fade" id="report" role="tabpanel">
		        			<table class="table table-striped table-responsive-md btn-table">

								<thead>
								  <tr>
								    <th>Sno.</th>
								    <th>Name</th>
								    <th>Email</th>
								    <th>Phone</th>
								    <th>Timing</th>
								    <th>Message</th>
								  </tr>
								</thead>

								<tbody>
								  @foreach($completedappointments as $item)
								  <tr>
								    <th scope="row">3</th>
								    <td>{{$item->name}}</td>
								    <td>{{$item->email}}</td>
								    <td>{{$item->phone}}</td>
								    <td>{{$item->timings}}</td>
								    <td>{{$item->message}}</td>
								    <td>
								     <!-- <button type="button" onclick="" class="btn btn-primary" style="background-color: #5768ad; ">Accept Request</button> -->
								      <a href="#" class="btn btn-dark">Appointment attended</a>
								    </td>
								  </tr>
								  @endforeach
								</tbody>

								</table>
		                </div>
		                <!-- report form end -->
						
						<!-- refer form begin -->
		                <div class="tab-pane fade" id="refer" role="tabpanel">
		                                
	                    </div>
	                    <!-- refer form end -->
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<!-- trading history area end -->

@endsection 
