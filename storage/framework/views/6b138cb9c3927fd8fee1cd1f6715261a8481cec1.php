            <div class="card">
                <div class="card-body">
                   <form action="<?php echo e(route('storenews')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>    
                    <div class="form-group">
                        <label for="source">Source</label>
                        <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" placeholder="Enter News Source">
                        <?php $__errorArgs = ['source'];
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
                        <label for="headline">Headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" aria-describedby="headlineHelp" placeholder="Enter Headline of the News">
                        <?php $__errorArgs = ['headline'];
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
                        <label for="content">Content</label>
                        <textarea type="text"class="form-control" name="content" id="content" rows="10" placeholder="Enter Content"></textarea>
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
                        <label for="newsurl">News URL</label>
                        <input type="text" class="form-control" name="newsurl" id="newsurl" aria-describedby="newsurlHelp" placeholder="Enter News URL">
                        <?php $__errorArgs = ['newsURL'];
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
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="file-upload">
                        <label class="custom-file-label" for="file-upload">Choose Image for the News...</label>
                        <div id="file-upload-filename"></div>
                        <?php $__errorArgs = ['image'];
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

                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add News article</button></center>
                   </form>
                </div>
            </div><?php /**PATH G:\sahayak1\sahaayak\resources\views/news/create.blade.php ENDPATH**/ ?>