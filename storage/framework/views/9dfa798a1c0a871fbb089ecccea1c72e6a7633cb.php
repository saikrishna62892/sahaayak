<div class="row">
	<div class="col-lg-6 col-md-6">
        <?php $__empty_1 = true; $__currentLoopData = $diary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <div align="right"><a href="/user/home/editEvent/<?php echo e($event->id); ?>/eventedited" style="color: #5768ad;">Edit</a>&emsp;
                    <a href="/user/home/deleteEvent/<?php echo e($event->id); ?>/eventdeleted" style="color: #5768ad;">Delete</a></div>
                    <h5><?php echo e($event->title); ?></h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">Details: <?php echo e(Carbon\Carbon::parse($event->created_at)->format('d-M-Y g:h:i:s A')); ?></h6><br>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($event->category); ?></h6><br>
                    <h6>Content</h6>
                    <p align="justify"><?php echo e($event->content); ?></p>
                </div>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h4>No Events added</h4>
        <?php endif; ?>
        <div class="col-lg-12"><span><?php echo e($diary->links()); ?></span></div>
    </div>
    
   <div class="col-lg-6 col-md-6">
        <h4 align="center">Post an Event</h4>
        <br><br>
        <form action="home/displaydiary" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('diary.diary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
            <center><button type="submit" name="action" value="add_to_diary" class="btn btn-primary" style="background-color: #5768ad;">Add to diary</button><br><br>
            <button type="submit" name="action" value="add_to_story" class="btn btn-primary" style="background-color: #5768ad;">Add to story</button></center>
        </form>
    </div>
</div>

<?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/diary/create.blade.php ENDPATH**/ ?>