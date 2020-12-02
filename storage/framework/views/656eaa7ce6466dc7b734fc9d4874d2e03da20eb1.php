                    <div class="form-group">
                        <label for="source">Please enter source</label>
                        <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" placeholder="Your news source here..." value="<?php echo e(old('source') ?? $newsarticle->source); ?>" required autocomplete="off" >
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
                        <label for="headline">Please enter headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" aria-describedby="headlineHelp" placeholder="Your news headline here..."  value="<?php echo e(old('headline') ?? $newsarticle->headline); ?>" required autocomplete="off" >
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
                        <label for="content">Please enter content</label>
                        <textarea type="text"class="form-control" name="content" id="content" rows="10" placeholder="Your content here..." required  autocomplete="off" ><?php echo e(old('content') ?? $newsarticle->content); ?></textarea> 
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
                        <label for="newsurl">Please enter news URL</label>
                        <input type="text" class="form-control" name="newsurl" id="newsurl" aria-describedby="newsurlHelp" placeholder="Your news URL here..." value="<?php echo e(old('newsurl') ?? $newsarticle->newsurl); ?>" required autocomplete="off" >
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
                        <input type="file" class="custom-file-input" id="customFile" name="image" 
                        value="<?php echo e(old('image') ?? \Storage::disk('s3')->url('uploads/news/img/'.$newsarticle->image)); ?>" required autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose image...</label>
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
                    </div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/news/news.blade.php ENDPATH**/ ?>