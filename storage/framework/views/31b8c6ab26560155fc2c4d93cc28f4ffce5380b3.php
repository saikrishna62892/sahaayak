

<?php $__env->startSection('name'); ?>
    <?php echo e($volunteer->name); ?>

<?php $__env->stopSection(); ?>
	<?php $__env->startSection('content'); ?>
	<br>	
	<div class="container" id="stats">
		<div class="row">
			<div class="col-sm-3">
				<div class="card shadow p-4 mb-5 bg-white rounded">
					<div class="card-body">
						<h5 class="card-title" align="center">Checkins</h5>
						<p class="card-text" align="center">#Logins</p>
						<h1 align="center"><?php echo e($checkins); ?></h1>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
			    <div class="card shadow p-4 mb-5 bg-white rounded">
			        <div class="card-body">
				        <h5 class="card-title" align="center">Sessions</h5>
				        <p class="card-text" align="center">#Interactions</p>
				        <h1 align="center"><?php echo e($interactions); ?></h1>
			        </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card shadow p-4 mb-5 bg-white rounded">
				    <div class="card-body">
				        <h5 class="card-title" align="center">Requests</h5>
				        <p class="card-text" align="center">#Yet to accept</p>
				        <h1 align="center"><?php echo e($requests); ?></h1>
				    </div>
				</div>
			</div>
			<div class="col-sm-3">
			    <div class="card shadow p-4 mb-5 bg-white rounded">
			        <div class="card-body">
				        <h5 class="card-title" align="center">Case Histories</h5>
				        <p class="card-text" align="center">#Case histories</p>
				        <h1 align="center"><?php echo e($casehistory_count); ?></h1>
				        
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<!-- flash messages section begin -->
    <div class="flash-message">
      <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Session::has('alert-' . $msg)): ?>
            <center><p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?></p></center>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <th scope="col">Phone</th>
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
                                    <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    	<?php $user_email=App\User::find($item->user_id)->email; ?>
                                    	<?php $user_phone=App\User::find($item->user_id)->phone; ?>
                                    <tr>
                                        <td scope="row"><?php echo e($count++); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->college_id); ?></td>
                                        <td><?php echo e($item->gender); ?></td>
									    <td><?php echo e($user_email); ?></td>
									    <td><?php echo e($user_phone); ?></td>
									    <td><?php echo e($item->department); ?></td>
									    <td><?php echo e($item->faculty_advisor); ?></td>
									    <td><?php echo e($item->appointment_type); ?></td>
									    <td><?php echo e($item->date); ?></td>
									    <?php if($item->slot==1): ?>
									    	<td>8AM - 9AM</td>
									    <?php elseif($item->slot==2): ?>
									    	<td>9AM - 10AM</td>
									    <?php elseif($item->slot==3): ?>
									    	<td>10AM - 11AM</td>
									    <?php elseif($item->slot==4): ?>
									    	<td>11AM - 12PM</td>
									    <?php elseif($item->slot==5): ?>
									    	<td>12PM - 1PM</td>
									    <?php elseif($item->slot==6): ?>
									    	<td>1PM - 2PM</td>
									    <?php elseif($item->slot==7): ?>
									    	<td>2PM - 3PM</td>
									    <?php elseif($item->slot==8): ?>
									    	<td>3PM - 4PM</td>
									    <?php elseif($item->slot==9): ?>
									    	<td>4PM - 5PM</td>
									    <?php else: ?>
									    	<td> ------ </td>
									    <?php endif; ?>
									    <td><?php echo e($item->message); ?></td>
									    <td align="center">
									    	<a class="btn btn-success" href="/counsellor/appointment/<?php echo e($item->id); ?>/acceptAppointment">Accept Appointment?</a>&emsp;
									    </td>
									    <td align="center">
									    	<a class="btn btn-danger" href="/counsellor/appointment/<?php echo e($item->id); ?>/rejectAppointment">Reject Appointment?</a>&emsp;
									    </td>
									    <td align="center">
									    	<a class="btn btn-warning" href="/counsellor/appointment/<?php echo e($item->id); ?>/1/rescheduleAppointment" style="color: #fff;">Reschedule & Accept!</a>
									    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h5>No Requests Made still..</h5>
                                    <?php endif; ?>
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
	                                        <th scope="col">Phone</th>
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

	                                     <?php $__empty_1 = true; $__currentLoopData = $completedappointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                                     <?php $user_email=App\User::find($item->user_id)->email; ?>
	                                     <?php $user_phone=App\User::find($item->user_id)->phone; ?>
	                                    <tr>
	                                        <td scope="row"><?php echo e($count++); ?></td>
	                                        <td><?php echo e($item->name); ?></td>
	                                        <td><?php echo e($item->college_id); ?></td>
	                                        <td><?php echo e($item->gender); ?></td>
										    <td><?php echo e($user_email); ?></td>
										    <td><?php echo e($user_phone); ?></td>
										    <td><?php echo e($item->department); ?></td>
										    <td><?php echo e($item->faculty_advisor); ?></td>
										    <td><?php echo e($item->appointment_type); ?></td>
										    <td ><?php echo e($item->date); ?></td>
										    <?php if($item->slot==1): ?>
										    	<td>8AM - 9AM</td>
										    <?php elseif($item->slot==2): ?>
										    	<td>9AM - 10AM</td>
										    <?php elseif($item->slot==3): ?>
										    	<td>10AM - 11AM</td>
										    <?php elseif($item->slot==4): ?>
										    	<td>11AM - 12PM</td>
										    <?php elseif($item->slot==5): ?>
										    	<td>12PM - 1PM</td>
										    <?php elseif($item->slot==6): ?>
										    	<td>1PM - 2PM</td>
										    <?php elseif($item->slot==7): ?>
										    	<td>2PM - 3PM</td>
										    <?php elseif($item->slot==8): ?>
										    	<td>3PM - 4PM</td>
										    <?php elseif($item->slot==9): ?>
										    	<td>4PM - 5PM</td>
										    <?php else: ?>
										    	<td> ------ </td>
										    <?php endif; ?>
										    <td><?php echo e($item->message); ?></td>
										    <?php
										    	$endslots =   ['00','09','10','11','12','13','14','15','16','17'];
        										$dtB = Carbon\Carbon::parse($item->date.' '.$endslots[$item->slot].':00:00');
										    	$dtA = Carbon\Carbon::now();
											?>
										    <?php if($dtA > $dtB): ?>
										    <td><button id="<?php echo e($item->college_id); ?>#<?php echo e($item->name); ?>#<?php echo e($user_email); ?>#<?php echo e($item->id); ?>" data-toggle="tab" href="#makereport" role="tab" onClick="reply_click(this.id,)" class="btn btn-primary" style="background-color: #5768ad;">Add Case History</button></td>
										    <?php else: ?>
										    <td style="color: lightgrey;">Make report will availabe after session completion.</td>
										    <?php endif; ?>

										    <td><a target="_blank" href="/counsellor/appointment/<?php echo e($item->user_id); ?>/getCaseHistory" class="btn btn-primary" style="background-color: #5768ad;">Get <?php echo e($item->name); ?> Report</a></td>
										    <?php if($dtA > $dtB): ?>
										    <td><a class="btn btn-primary" href="/counsellor/appointment/<?php echo e($item->id); ?>/mailToFA" style="background-color: #5768ad;">Mail to Faculty Advisor</button></td>
										    <?php else: ?>
										    <td style="color: lightgrey;">Mailing to FA will availabe after session completion.</td>
										    <?php endif; ?>
										   	<!-- href="/counsellor/appointment/<?php echo e($item->id); ?>/rescheduleAppointment" -->
										   	<!--<?php if($dtA < $dtB): ?>
										    <td><a class="btn btn-primary" href="/counsellor/appointment/<?php echo e($item->id); ?>/2/rescheduleAppointment" style="background-color: #5768ad;">Reschedule <?php echo e($item->name); ?> Appointment!</a></td>
										    <?php else: ?>
										    <td style="color: lightgrey;">Can't Reschedule Now</td>
										    <?php endif; ?>-->
	                                    </tr>
	                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	                                    <h5>No Reports to make..</h5>
	                                    <?php endif; ?>
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
                                    <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td scope="row"><?php echo e($count++); ?></td>
                                        <td><?php echo e($item->name); ?></td>
									    <td><?php echo e($item->email); ?></td>
									    <td><?php echo e($item->phone); ?></td>
									    <td><?php echo e($item->timings); ?></td>
									    <td><?php echo e($item->message); ?></td>
									    <td><a href="/volunteer/appointment/<?php echo e($item->id); ?>/acceptAppointment" style="color: #5768ad;">Accept?</a></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h5>No Requests Made still..</h5>
                                    <?php endif; ?>
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
            				<?php echo csrf_field(); ?>
            				<div class="form-group">
							    <label for="college_id">Please Enter College ID of the User</label>
							    <input type="text" class="form-control" name="college_id" id="college_id" aria-describedby="college_idDHelp" placeholder="User CollegeID here.." required autocomplete="off" >
							    <?php $__errorArgs = ['college_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							    <small class="text-danger"><?php echo e($message); ?></small>
							    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
        	<?php echo $__env->make('appointment.reportForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Sahaayak\sahaayak\resources\views/volunteer/dashboard_volunteer.blade.php ENDPATH**/ ?>