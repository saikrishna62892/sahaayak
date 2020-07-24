
<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit Talks</h4>

        <div class="card-body">
           <form action="/admin/home/edittalks/<?php echo e($talk->id); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('talks.talk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit Talk</button></center>
           </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/talks/edit.blade.php ENDPATH**/ ?>