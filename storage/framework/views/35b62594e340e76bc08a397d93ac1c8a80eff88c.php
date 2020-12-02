<style>
    .column {
  float: left;
  width: 50%;
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
            <div class="card-body">
                <h2 align="center">Sahaayak <?php echo e($month[$req_month]); ?>_<?php echo e($req_year); ?> Statistic Reports</h2>
                <?php $startslots = ['00','08AM - 09AM','09AM - 10AM','10AM - 11AM','11AM - 12PM','12PM - 01PM','01PM - 02PM','02PM - 03PM','03PM - 04PM','04PM - 05PM']; ?>
                <?php $sno=1; ?>
                <?php $__empty_1 = true; $__currentLoopData = $counsellors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counsellor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                	<h2 align="center" style="color: #5768ad;"><?php echo e($sno); ?>.<?php echo e($counsellor->name); ?> Appointments Stats</h3>
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
		                <?php $__empty_2 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
	                		<?php if($appointment->counsellor_id == $counsellor->id): ?>
	                			<?php $monthly_appointments_count++; ?>
	                			<?php if($appointment->gender == "male"): ?>
	                				<?php $male_count++; ?>
	                			<?php elseif($appointment->gender == "female"): ?>
	                				<?php $female_count++; ?>
	                			<?php else: ?>
	                				<?php $not_specified_count++; ?>
	                			<?php endif; ?>
		                		<tr>
		                			<td align="center"><?php echo e($count++); ?></td>
		                			<?php $user=App\User::find($appointment->user_id); ?>
		                			<td align="center"><?php echo e($user->name); ?></td>
		                			<td align="center"><?php echo e($appointment->gender); ?></td>
		                			<td align="center"><?php echo e($user->rollnum); ?></td>
		                			<td align="center"><?php echo e($appointment->appointment_type); ?></td>
		                			<td align="center"><?php echo e($appointment->date); ?></td>
		                			<td align="center"><?php echo e($startslots[$appointment->slot]); ?></td>
		                			<td align="center">
								    	<?php if($appointment->accept==0 && $appointment->is_Rejected==0): ?>
								    		Pending
								    	<?php elseif($appointment->accept==0 && $appointment->is_Rejected==1): ?>
								    		Rejected
								    	<?php elseif($appointment->is_Rescheduled==1): ?>
								    		Rescheduled
								    	<?php elseif($appointment->accept==1 && $appointment->is_Completed==1): ?>
								    		Completed
								    	<?php elseif($appointment->accept==1): ?>
								    		Accepted
								    	<?php else: ?>
								    		---NA---
								    	<?php endif; ?>
								    </td>
		                		</tr>
		                	<?php endif; ?>
		                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
		    
		                <?php endif; ?>
		                <?php if($monthly_appointments_count == 0): ?>
		                <td colspan="8" align="center">No Appointments made</td>
		                <?php endif; ?>
		            </table>
		        	<h5 align="center">Monthly Appointments Count : <?php echo e($monthly_appointments_count); ?></h5>
		        	<h5 align="center">Male Count : <?php echo e($male_count); ?> ; Female Count : <?php echo e($female_count); ?> ; Not Specified Count : <?php echo e($not_specified_count); ?></h5>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                	<h3 align="center" style="color: #5768ad;">No Counsellors Data Available</h3>  
                <?php endif; ?>
                <br>
                <small><center><a href="<?php echo e(env('APP_URL')); ?>/login" target="_blank">Click here to login</a></center></small>
                <p align="center" style="white-space: pre-line;color: grey;">&#169; copyright to sahaayak,All rights reserved</p>
              </div>
            </div>
    </div>
</div>


<?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/admin/getMonthlyreport.blade.php ENDPATH**/ ?>