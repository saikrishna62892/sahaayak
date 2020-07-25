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
            


            <div class="form-group">
                <label for="formGroupExampleInput">Please enter event title</label>
                <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Your title here..."  value="<?php echo e(old('title')); ?>" autocomplete="off" >
                <?php echo csrf_field(); ?>
                <?php $__errorArgs = ['title'];
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
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Please enter event content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here..."  autocomplete="off" ><?php echo e(old('content')); ?></textarea>
                <?php $__errorArgs = ['content'];
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
            <div class="form-group">
                <select class="custom-select" name="category" required>
                    <option value="">Please select category</option>
                    <option value="Depression">Depression</option>
                    <option value="Suicide">Suicide</option>
                    <option value="Stress">Stress</option>
                    <option value="Stigma">Stigma</option>
                    <option value="Healthy Sleep">Healthy Sleep</option>
                    <option value="Mental Illness">Mental Illness</option>
                    <option value="Hopelessness">Hopelessness</option>
                    <option value="Fear of Loss">Fear of Loss</option>
                    <option value="Social Isolation">Social Isolation</option>
                </select>
                <?php $__errorArgs = ['category'];
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





            &emsp;
            <center><button type="submit" name="action" value="add_to_diary" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Event added Succesfully')">Add to diary</button><br><br>
            <button type="submit" name="action" value="add_to_story" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Add to story</button></center>
        </form>
    </div>
</div>

<?php /**PATH G:\sahayak1\sahaayak\resources\views/diary/create.blade.php ENDPATH**/ ?>