
	<?php $__env->startSection('content'); ?>
	<br>	
	<div class="container" id="stats">
		<div class="row">
			<div class="col-sm-3">
				<div class="card shadow p-4 mb-5 bg-white rounded">
					<div class="card-body">
						<h5 class="card-title" align="center">Checkins</h5>
						<p class="card-text" align="center">#Logins</p>
						<h1 align="center">2000</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
			    <div class="card shadow p-4 mb-5 bg-white rounded">
			        <div class="card-body">
				        <h5 class="card-title" align="center">Posts</h5>
				        <p class="card-text" align="center">#Talks</p>
				        <h1 align="center">300</h1>
				        
			        </div>
			    </div>
			</div>
			<div class="col-sm-3">
			    <div class="card shadow p-4 mb-5 bg-white rounded">
			        <div class="card-body">
				        <h5 class="card-title" align="center">Sessions</h5>
				        <p class="card-text" align="center">#Interactions</p>
				        <h1 align="center">100</h1>
			        </div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card shadow p-4 mb-5 bg-white rounded">
				    <div class="card-body">
				        <h5 class="card-title" align="center">Requests</h5>
				        <p class="card-text" align="center">#Yet to accept</p>
				        <h1 align="center">50</h1>
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
								    	<!--<th scope="col">Session Completed</th>-->
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
									    <td colspan="3"><?php echo e($item->message); ?></td>
									    <td><a href="/volunteer/appointment/<?php echo e($item->id); ?>/acceptAppointment" style="color: #5768ad;">Accept</a></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h5>No Requests Made still..</h5>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
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
								    <th>Make Report</th>
								  </tr>
								</thead>

								<tbody>
								  <?php $__currentLoopData = $completedappointments->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								  <tr>
								    <th scope="row"><?php echo e($key+1); ?></th>
								    <td><?php echo e($item->name); ?></td>
								    <td><?php echo e($item->email); ?></td>
								    <td><?php echo e($item->phone); ?></td>
								    <td><?php echo e($item->timings); ?></td>
								    <td><?php echo e($item->message); ?></td>
								    <td>
								     <!-- <button type="button" onclick="" class="btn btn-primary" style="background-color: #5768ad; ">Accept Request</button> -->
								     <!--
								      <a href="/volunteer/appointment/<?php echo e($item->id); ?>/report" class="btn btn-dark">Make Report</a>
								  	-->
								  <button id="<?php echo e($item->id); ?>" data-toggle="tab" href="#makeReport" role="tab" onClick="reply_click(this.id)" class="btn btn-primary">Make Report</button>
								    </td>
								  </tr>
								  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>

								</table>

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
									    	<!--<th scope="col">Session Completed</th>-->
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php $count=1 ?>
	                                     <?php $__empty_1 = true; $__currentLoopData = $completedappointments->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                                    <tr>
	                                        <td scope="row"><?php echo e($count++); ?></td>
	                                        <td><?php echo e($item->name); ?></td>
										    <td><?php echo e($item->email); ?></td>
										    <td><?php echo e($item->phone); ?></td>
										    <td><?php echo e($item->timings); ?></td>
										    <td colspan="3"><?php echo e($item->message); ?></td>
										    <td><button id="<?php echo e($item->id); ?>" data-toggle="tab" href="#makeReport" role="tab" onClick="reply_click(this.id)" class="btn btn-primary" style="background-color: #5768ad;">Make Report</button></td>
	                                    </tr>
	                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	                                    <h5>No Reports to make..</h5>
	                                    <?php endif; ?>
	                                </tbody>
	                            </table>
	                        </div>

		                </div>
		                <!-- report form end -->
						
						<!-- refer form begin -->
		                <div class="tab-pane fade" id="refer" role="tabpanel">
		                    <p align="center">Please refer us if u know any volunteers or users so that your share will help the required one<br></p>
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

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/volunteer/dashboard_volunteer.blade.php ENDPATH**/ ?>