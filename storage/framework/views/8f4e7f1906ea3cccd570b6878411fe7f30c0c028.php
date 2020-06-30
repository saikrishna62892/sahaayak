
            <div class="card">
                <div class="card-header">New Video</div>

                <div class="card-body">
                   <form action="/admin/home/videos" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="videoSource">VideoSource</label>
                        <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Enter Video Source">
                        <small id="videoSourceHelp" class="form-text text-muted">enter source of video.</small>
                        <?php $__errorArgs = ['videoSource'];
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
                        <label for="videoTag">Video Tag</label>
                        <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Enter Video Tag">
                        <small id="videoTagHelp" class="form-text text-muted">enter video tag.</small>
                        <?php $__errorArgs = ['videoTag'];
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
                        <label for="videoURL">Video URL</label>
                        <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Enter Video URL">
                        <small id="videoURLHelp" class="form-text text-muted">enter video url.</small>
                        <?php $__errorArgs = ['videoURL'];
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

                        <button  type="submit" class="btn btn-primary">Add Video</button>
                   </form>
                </div>
            </div><?php /**PATH G:\sahayak1\sahaayak\resources\views/video/create.blade.php ENDPATH**/ ?>