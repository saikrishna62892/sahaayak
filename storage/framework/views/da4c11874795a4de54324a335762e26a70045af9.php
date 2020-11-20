                    <div class="form-group">
                        <label for="name">Counsellor Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Please enter Counsellor name" value="<?php echo e(old('name') ?? $counsellor->name); ?>" autocomplete="off" >
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
                        <label for="college_id">College ID</label>
                        <input type="text" class="form-control" name="college_id" id="college_id" aria-describedby="college_idHelp" placeholder="Please enter College ID" value="<?php echo e(old('college_id') ?? $counsellor->college_id); ?>" autocomplete="off" >
                        <?php $__errorArgs = ['college_id'];
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
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Please enter Counsellor email" value="<?php echo e(old('email') ?? $counsellor->email); ?>" autocomplete="off" >
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
                        <label for="calendar_url">Google Calendar URL</label>
                        <input type="text" class="form-control" name="calendar_url" id="calendar_url" aria-describedby="calendar_urlHelp" placeholder="Please enter Google Calendar URL" value="<?php echo e(old('calendar_url') ?? $counsellor->calendar_url); ?>" autocomplete="off" >
                        <?php $__errorArgs = ['calendar_url'];
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
                        <label for="profession">Profession</label>
                        <input type="text" class="form-control" name="profession" id="profession" aria-describedby="professionHelp" placeholder="Please enter Counsellor profession" value="<?php echo e(old('profession') ?? $counsellor->profession); ?>" autocomplete="off" >
                        <?php $__errorArgs = ['profession'];
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
                        <label for="bio">Add Bio</label>
                        <textarea type="text"class="form-control" name="bio" id="bio" rows="3" placeholder="Please enter Counsellor Bio"  autocomplete="off" ><?php echo e(old('bio') ?? $counsellor->bio); ?> </textarea> 
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
                        <textarea type="text"class="form-control" name="achievements" id="achievements" rows="3" placeholder="Please enter Counsellor achievements"  autocomplete="off" ><?php echo e(old('achievements') ?? $counsellor->achievements); ?> </textarea> 
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
                    <small>Please use <a href="https://www.remove.bg/upload" target="_blank" style="color: #5768ad;">removebg</a> website to remove background from an image for smoother appearance</small>             
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image" value="<?php echo e(old('image') ?? asset('/img/counsellors/'.$counsellor->image)); ?>"  autocomplete="off" >
                        <label class="custom-file-label" for="customFile">Please choose profile picture</label>
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
                    </div><?php /**PATH D:\Sahaayak\sahaayak\resources\views/counsellors/add.blade.php ENDPATH**/ ?>