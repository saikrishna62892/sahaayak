            <div class="card">
                <div class="card-header">New Video</div>

                <div class="card-body">
                   <form action="<?php echo e(route('storenews')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose Image for the Post...</label>
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
                    <div class="form-group">
                        <label for="source">News source</label>
                        <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" placeholder="Enter about source">
                        <small id="sourceHelp" class="form-text text-muted">enter source info</small>
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
                        <label for="headline">News headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" aria-describedby="headlineHelp" placeholder="Enter headline">
                        <small id="headlineHelp" class="form-text text-muted">enter news headline</small>
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
                        <label for="content">content for news</label>
                        <input type="text" class="form-control" name="content" id="content" aria-describedby="contentHelp" placeholder="Enter content">
                        <small id="contentHelp" class="form-text text-muted">enter content</small>
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
                        <input type="text" class="form-control" name="newsurl" id="newsurl" aria-describedby="newsurlHelp" placeholder="Enter news URL">
                        <small id="newsurlHelp" class="form-text text-muted">enter news url.</small>
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

                        <button  type="submit" class="btn btn-primary">Add News article</button>
                   </form>
                </div>
            </div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/news/create.blade.php ENDPATH**/ ?>