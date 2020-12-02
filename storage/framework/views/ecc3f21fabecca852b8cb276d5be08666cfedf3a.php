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
                <h2 align="center">Report for <?php echo e($user->name); ?></h2>
                <div class="row">
                    <div class="column">
                    <center>
                        <h3 style="color: #5768ad;">User Details</h3>
                        <p>Name: <?php echo e($user->name); ?></p>
                        <p>College ID: <?php echo e($user->rollnum); ?></p>
                    </center>
                    </div>
                    <div class="column">
                        <center>
                        <h3 style="color: #5768ad;">Report Details</h3>
                        <p>Issued by: <?php echo e($counsellor->name); ?></p>
                        <p>Issued on: <?php echo e(Carbon\Carbon::now()->format('d-M-Y g:h:i A')); ?></p>
                    </center>
                    </div>
                </div>
                <h3 align="center" style="color: #5768ad;">Previous Session Details</h3>  
                <table style="width:100%">
                <tr>
                    <th>Date</th>
                    <th>Slot</th>
                    <th>Counsellor Name</th>
                    <th>About</th>
                    <th>Remarks from Counsellor</th>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $user->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if(!is_null($appointment)): ?>
                    <tr align="center">
                        <td><?php echo e($appointment->date); ?></td>
                        <?php if($appointment->slot==1): ?>
                            <td>8AM - 9AM</td>
                        <?php elseif($appointment->slot==2): ?>
                            <td>9AM - 10AM</td>
                        <?php elseif($appointment->slot==3): ?>
                            <td>10AM - 11AM</td>
                        <?php elseif($appointment->slot==4): ?>
                            <td>11AM - 12PM</td>
                        <?php elseif($appointment->slot==5): ?>
                            <td>12PM - 1PM</td>
                        <?php elseif($appointment->slot==6): ?>
                            <td>1PM - 2PM</td>
                        <?php elseif($appointment->slot==7): ?>
                            <td>2PM - 3PM</td>
                        <?php elseif($appointment->slot==8): ?>
                            <td>3PM - 4PM</td>
                        <?php elseif($appointment->slot==9): ?>
                            <td>4PM - 5PM</td>
                        <?php else: ?>
                            <td> ------ </td>
                        <?php endif; ?>
                        <?php $counsellor_details = App\Counsellor::find($appointment->counsellor_name); ?>
                        <td><?php echo e($counsellor_details->name); ?></td>
                        <td><?php echo e($appointment->message); ?></td>
                        <?php $casehistory = App\Casehistory::where('appointment_id',$appointment->id)->first(); ?>
                        <?php if(!is_null($casehistory)): ?>
                        <td align="justify" style="padding: 5px 10px 5px 10px;"><?php echo e($casehistory->remarks); ?></td>
                        <?php else: ?>
                        <td>-- Not Yet Made --</td>
                        <?php endif; ?>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="5">User Data Not Present</td>
                <?php endif; ?>

                </table>
                <br>
                <small><center><a href="https://sahaayak.co.in/login" target="_blank">Click here to login</a></center></small>
                <p align="center" style="white-space: pre-line;color: grey;">&#169; copyright to sahaayak,All rights reserved</p>
              </div>
            </div>
    </div>
</div>


<?php /**PATH D:\Sahaayak\sahaayak\resources\views/volunteer/casehistory.blade.php ENDPATH**/ ?>