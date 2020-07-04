<div class="row">
	<div class="col-lg-6 col-md-6">
        <?php $__empty_1 = true; $__currentLoopData = $diary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card" style="background-color: #f5f6fa;">
                <div class="card-body">
                    <h5><?php echo e($event->title); ?></h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">Posted date: <?php echo e(Carbon\Carbon::parse($event->created_at)->format('d-M-Y')); ?></h6>
		            <h6 class="card-subtitle mb-2 text-muted">Posted time: <?php echo e(Carbon\Carbon::parse($event->created_at)->format('g:h:i:s A')); ?></h6><br>
                    <h6>Content</h6>
                    <p><?php echo e($event->content); ?></p>
                </div>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h4>No Events added</h4>
        <?php endif; ?>
    </div>
    <div class="col-lg-6 col-md-6">
        <form action="home/displaydiary" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="formGroupExampleInput">Event Title</label>
                <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Title of the Event">
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
                <label for="exampleFormControlTextarea1">Event Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your event content here"></textarea>
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
                    <option value="">Select Category</option>
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
            <center><button type="submit" name="action" value="add_to_diary" class="btn btn-primary" style="background-color: #5768ad;">Add to diary</button>
            <button type="submit" name="action" value="add_to_story" class="btn btn-primary" style="background-color: #5768ad;">Add to story</button></center>
        </form>
    </div>
</div>

<?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/diary/create.blade.php ENDPATH**/ ?>