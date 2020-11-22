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
            <?php $__empty_1 = true; $__currentLoopData = $user->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td scope="row"><?php echo e($count++); ?></td>
			    <td colspan="2"><?php echo e($item->appointment_type); ?></td>
			    <td><?php echo e($item->date); ?></td>
			    <?php if($item->slot==1): ?>
			    	<td colspan="2">8AM - 9AM</td>
			    <?php elseif($item->slot==2): ?>
			    	<td colspan="2">9AM - 10AM</td>
			    <?php elseif($item->slot==3): ?>
			    	<td colspan="2">10AM - 11AM</td>
			    <?php elseif($item->slot==4): ?>
			    	<td colspan="2">11AM - 12PM</td>
			    <?php elseif($item->slot==5): ?>
			    	<td colspan="2">12PM - 1PM</td>
			    <?php elseif($item->slot==6): ?>
			    	<td colspan="2">1PM - 2PM</td>
			    <?php elseif($item->slot==7): ?>
			    	<td colspan="2">2PM - 3PM</td>
			    <?php elseif($item->slot==8): ?>
			    	<td colspan="2">3PM - 4PM</td>
			    <?php elseif($item->slot==9): ?>
			    	<td colspan="2">4PM - 5PM</td>
			    <?php else: ?>
			    	<td> ---NA--- </td>
			    <?php endif; ?>
			    <?php $counsellor_name = App\Counsellor::find($item->counsellor_id)->name; ?>
			    <td colspan="2"><?php echo e($counsellor_name); ?></td>
			    <td colspan="3"><?php echo e($item->message); ?></td>
			    <td>
			    	<?php if($item->accept==0 && $item->is_Rejected==0): ?>
			    		<a href="#" class="btn btn-warning"> Pending </a>
			    	<?php elseif($item->accept==0 && $item->is_Rejected==1): ?>
			    		<a href="#" class="btn btn-danger">Rejected </a>
			    	<?php elseif($item->is_Rescheduled==1): ?>
			    		<a href="#" class="btn btn-info"> Rescheduled </a>
			    	<?php elseif($item->accept==1 && $item->is_Completed==1): ?>
			    		<a href="#" class="btn btn-success"> Completed </a>
			    	<?php elseif($item->accept==1): ?>
			    		<a href="#" class="btn btn-success">Accepted </a>
			    	<?php else: ?>
			    		---NA---
			    	<?php endif; ?>
			    </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h5>No Requests Made still..</h5>
            <?php endif; ?>
        </tbody>
    </table>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/appointment/user_appointments.blade.php ENDPATH**/ ?>