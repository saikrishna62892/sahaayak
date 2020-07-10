
    <?php $__env->startSection('content'); ?> 
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-title p-b-25">
                        SignUp : Step 1
                    </span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Username">
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
                        <?php echo csrf_field(); ?>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email">
                        <?php $__errorArgs = ['email'];
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
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                        <?php $__errorArgs = ['password'];
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
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div>
                        Role&emsp;
                                <label class="radio-container m-r-20">
                                    <input type="radio" checked="checked" name="is_Volunteer" value="0">
                                    <span class="checkmark"></span>User
                                </label>
                                <label class="radio-container">
                                    <input type="radio" name="is_Volunteer" value="1">
                                    <span class="checkmark"></span>Volunteer
                                </label>
                    </div>
                    
                    <div class="container-login100-form-btn p-t-12">
                        <button class="login100-form-btn">
                            SignUp
                        </button>
                    </div>

                    <div class="text-center w-full p-t-12 p-b-12">
                        <span class="txt1">
                            Or Signup with
                        </span>
                    </div>

                    <a href="<?php echo e(url('auth/facebook')); ?>" class="btn-face m-b-10">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="<?php echo e(url('auth/google')); ?>" class="btn-google m-b-10">
                        <img src="img/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a>

                    <div class="text-center w-full p-t-4">
                        <span class="txt1">
                            Already Signed?
                        </span>

                        <a class="txt1 bo1 hov1" href="/login">
                            Login now                           
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reg_forms_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ganesh\Desktop\dileep\sahaayak\resources\views/auth/register.blade.php ENDPATH**/ ?>