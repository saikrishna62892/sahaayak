

	<?php $__env->startSection('content'); ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
				<form class="login100-form validate-form" method="post" action="/register/step2/<?php echo e($user->id); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<span class="login100-form-title p-b-25">
						SignUp : Step 2
					</span>
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Full Name" required>
						<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>
					Note: Please Provide 10 digit number.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="tel" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Phone" required>
						<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-phone"></span>
						</span>
					</div>
					Note: Please Provide Highest degree.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="qualification" value="<?php echo e(old('qualification')); ?>" placeholder="Qualification" required>
						<?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100" ></span>
						<span class="symbol-input100">
							<span class="lnr lnr-layers"></span>
						</span>
					</div>
					Note: Please Provide Your Job Details.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="work" value="<?php echo e(old('work')); ?>" placeholder="Working in" required>
						<?php $__errorArgs = ['work'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-cog"></span>
						</span>
					</div>
					Note: Insight about becoming a Volunteer.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="insight" value="<?php echo e(old('insight')); ?>" placeholder="Insight" required>
						<?php $__errorArgs = ['insight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-pencil"></span>
						</span>
					</div>
					Note: Any Questions for us?
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="queries" value="<?php echo e(old('queries')); ?>"placeholder="Queries">
						<?php $__errorArgs = ['queries'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-printer"></span>
						</span>
					</div>
  					Note: Provide any identification prooof.
					<div class="custom-file mb-3">
      					<input type="file" class="custom-file-input" id="customFile" name="file1" value="<?php echo e(old('file1')); ?>">
      					<div> <?php echo e($errors->first('file1')); ?> </div>
					    <label class="custom-file-label" for="customFile">Aadhar/Driving License..etc</label>
					</div>
					Note: Provide any Working-id prooof.
					<div class="custom-file mb-3">
      					<input type="file" class="custom-file-input" id="customFile" name="file2" value="<?php echo e(old('file2')); ?>">
      					<div> <?php echo e($errors->first('file2')); ?> </div>
					    <label class="custom-file-label" for="customFile">Choose file</label>
					</div>
					<div class="container-login100-form-btn p-t-12">
						<button class="login100-form-btn">
							Apply for Verification
						</button>
					</div>
					<div class="text-center w-full p-t-4">
						<span class="txt1">
							<br>
							Already Signed?
						</span>

						<a class="txt1 bo1 hov1" href="#">
							Login now							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reg_forms_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/volunteer/volunteer_signup.blade.php ENDPATH**/ ?>