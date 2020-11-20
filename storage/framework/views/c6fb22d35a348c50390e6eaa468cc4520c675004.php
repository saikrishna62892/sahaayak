

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
				        <h5 class="card-title" align="center">Reports</h5>
				        <p class="card-text" align="center">#Pending reports</p>
				        <h1 align="center"><?php echo e($pending_reports); ?></h1>
				        
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<!-- flash messages section -->
	<div class="container">
	    <?php if(session()->has('message')): ?>
	    <center><div class="alert alert-success"><?php echo e(session()->get('message')); ?></div></center>
	    <?php endif; ?>
	</div>

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
                                    <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td scope="row"><?php echo e($count++); ?></td>
                                        <td><?php echo e($item->name); ?></td>
									    <td><?php echo e($item->email); ?></td>
									    <td><?php echo e($item->phone); ?></td>
									    <td><?php echo e($item->timings); ?></td>
									    <td colspan="3"><?php echo e($item->message); ?></td>
									    <td><a href="/volunteer/appointment/<?php echo e($item->id); ?>/acceptAppointment" style="color: #5768ad;">Accept?</a></td>
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
	                                        <th scope="col">Email</th>
	                                        <th scope="col">Phone</th>
	                                        <th scope="col">Timings</th>
	                                        <th scope="col" colspan="3">Message</th>
	                                        <th scope="col">Options</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php $count=1 ?>

	                                     <?php $__empty_1 = true; $__currentLoopData = $completedappointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                                    <tr>
	                                        <td scope="row"><?php echo e($count++); ?></td>
	                                        <td><?php echo e($item->name); ?></td>
										    <td><?php echo e($item->email); ?></td>
										    <td><?php echo e($item->phone); ?></td>
										    <td><?php echo e($item->timings); ?></td>
										    <td colspan="3"><?php echo e($item->message); ?></td>
										    <?php
										    	$dtA = new DateTime();
												$dtB = new DateTime($item->timings);
											?>
										    <?php if($dtA > $dtB): ?>
										    <td><button id="<?php echo e($item->id); ?>#<?php echo e($item->name); ?>#<?php echo e($item->email); ?>" data-toggle="tab" href="#makereport" role="tab" onClick="reply_click(this.id,)" class="btn btn-primary" style="background-color: #5768ad;">Make Report</button></td>
										    <?php else: ?>
										    <td style="color: lightgrey;">Make report will availabe after session completion.</td>
										    <?php endif; ?>

										    <td><a target="_blank" href="/volunteer/appointment/<?php echo e($item->user_id); ?>/getCaseHistory" class="btn btn-primary" style="background-color: #5768ad;">Get case history</a></td>
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
                                        <th scope="col" colspan="3">Message</th>
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
									    <td colspan="3"><?php echo e($item->message); ?></td>
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
       					    <div class="card-header">Enter ID to get History</div>

					        <div class="card-body">
        				    <form action="/volunteer/appointment/getCaseHistory" method="get" target="_blank">
            <?php echo csrf_field(); ?>
            				<div class="form-group">

    <label for="userID">Please enter userID</label>
    <input type="text" class="form-control" name="userID" id="userID" aria-describedby="userIDHelp" placeholder="Enter userID"  autocomplete="off" >
    <?php $__errorArgs = ['userID'];
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
               				  <button   type="submit" class="btn btn-primary" style="background-color: #5768ad;">case history</button>
               				</form>
        					</div>
    						</div>
	                    </div>
	                    <!-- reports form end -->

						
						<!-- refer form begin -->
		                <div class="tab-pane fade" id="refer" role="tabpanel">
		                    <p align="center">For goodness sake... don't make make us beg, spread the word!<br></p>
		                     <!-- The text field -->
							<p align="center"><input  align="center" type="text" class="form-control" value="www.sahaayak.co.in" id="myInput" style="width: 17%;pointer-events:none;" disabled="disabled">

							<!-- The button used to copy the text -->
							<button onclick="myFunction()" style="color: #5768ad;background:none!important;border:none;">Click here the copy the URL</button> </p>
	                    </div>
	                    <!-- refer form end -->
	                    
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

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/volunteer/dashboard_volunteer.blade.php ENDPATH**/ ?>