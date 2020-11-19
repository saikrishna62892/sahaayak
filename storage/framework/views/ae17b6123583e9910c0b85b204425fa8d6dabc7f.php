                    <div class="form-group">
                        <label for="name">Name of the counsellor</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Counsellor name" value="<?php echo e(old('name') ?? $newsarticle->name); ?>" autocomplete="off" >
                        <?php $__errorArgs = ['name'];
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
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter counsellor's email"  value="<?php echo e(old('email') ?? $newsarticle->email); ?>" autocomplete="off" >
                        <?php $__errorArgs = ['email'];
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
                        <label for="qualification">Qualification</label>
                        <input type="text" class="form-control" name="qualification" id="qualification" aria-describedby="qualificationHelp" placeholder="Enter counsellor's qualification" value="<?php echo e(old('quaification') ?? $newsarticle->quaification); ?>" autocomplete="off" >
                        <?php $__errorArgs = ['qualification'];
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
                        <label for="bio">Bio</label>
                        <textarea type="text"class="form-control" name="bio" id="bio" rows="10" placeholder="Enter counsellor's Biodata"  autocomplete="off" ><?php echo e(old('achievements') ?? $newsarticle->achievements); ?></textarea> 
                        <?php $__errorArgs = ['bio'];
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
                        <label for="achievements">Achievements</label>
                        <textarea type="text"class="form-control" name="achievements" id="achievements" rows="10" placeholder="Enter counsellor's achievements"  autocomplete="off" ><?php echo e(old('achievements') ?? $newsarticle->achievements); ?></textarea> 
                        <?php $__errorArgs = ['achievements'];
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
                        <input type="file" class="custom-file-input" id="customFile" name="image1" 
                        value="<?php echo e(old('image') ?? \Storage::disk('s3')->url('uploads/news/img/'.$counsellor->image1)); ?>" autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose college ID</label>
                        <?php $__errorArgs = ['image1'];
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
                        <input type="file" class="custom-file-input" id="customFile" name="image2" 
                        value="<?php echo e(old('image') ?? \Storage::disk('s3')->url('uploads/news/img/'.$counsellor->image2)); ?>" autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose image of counsellor</label>
                        <?php $__errorArgs = ['image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div><?php /**PATH D:\Sahaayak\sahaayak\resources\views/admin/add_counsellors.blade.php ENDPATH**/ ?>