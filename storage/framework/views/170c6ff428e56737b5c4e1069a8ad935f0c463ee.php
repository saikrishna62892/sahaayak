
<?php $__env->startSection('name'); ?>
    Join-us
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="limiter">
        <div class="container-login100">
            <div class="flash-message" style="display: flex;justify-content: center;align-items: center;">
              <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(Session::has('alert-' . $msg)): ?>
                    <center><p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?></p></center>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
                <a style="color: #5768ad;float: right;" href="<?php echo e(url('/')); ?>" class="primary-btn">Home</a>
                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('register')); ?>" >
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-title p-b-25">
                        SignUp
                    </span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Full Name">
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
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" id="rollnum" name="rollnum" value="<?php echo e(old('rollnum')); ?>" required autocomplete="rollnum" autofocus placeholder="Roll Number/Employee ID">
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
                            <span class="lnr lnr-license"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@nitc.ac.in">
                        <small>Please register through college nitc mail</small>
                        <input class="input100" id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="NITC Mail" pattern=".+@nitc.ac.in">
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
                        <input class="input100" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" minlength="8" maxlength="15">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span role="alert">
                                        <p style="color:red;" align="center">*<?php echo e($message); ?></p>
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

                    <!--<div class="wrap-input100 validate-input m-b-16" align="center">
                        Role&emsp;
                                <label class="radio-container m-r-20">
                                    <input type="radio" checked="checked" name="is_Volunteer" value="0">
                                    <span class="checkmark"></span>User
                                </label>
                                <label class="radio-container">
                                    <input type="radio" name="is_Volunteer" value="1">
                                    <span class="checkmark"></span>Volunteer
                                </label>
                    </div>-->

                    <div class="wrap-input100 validate-input m-b-16" align="center">
                        <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
                        <?php if($errors->has('g-recaptcha-response')): ?>
                            <span class="invalid-feedback" style="display: block;">
                                <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>


                    

                    <div class="contact100-form-checkbox m-l-4" data-validate = "Accept terms and conditions">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="terms" value="1">
                        <label class="label-checkbox100" for="ckb1">
                            By checking this box, I certify that I have read and accept the <button id="terms_conditions" class="btn btn-link" style="color: #5768ad;padding: 0px 0px 0px 0px;">terms&conditions</button> and the <button id="privacy_policy" class="btn btn-link" style="color: #5768ad;padding: 0px 0px 0px 0px;"> privacy policy </button> and I will adhere to the terms.

                            <!-- The Modal -->
                            <div id="myTerms" class="modal">

                              <!-- Terms & Conditions -->
                              <div class="modal-content" style="overflow-y: auto;">
                                <span class="close1">&times;</span>
                                <?php echo $__env->make('auth.termsandconditions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              </div>

                            </div>

                            <!-- Privacy Policy -->
                            <div id="myPrivacy" class="modal">

                              <!-- Modal content -->
                              <div class="modal-content" style="overflow-y: auto;">
                                <span class="close2">&times;</span>
                                <?php echo $__env->make('auth.privacy_policy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              </div>

                            </div>
                        </label>
                        <?php $__errorArgs = ['terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span role="alert">
                                        <p style="color:red;" align="center">*<?php echo e($message); ?></p>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="container-login100-form-btn p-t-12">
                        <button class="login100-form-btn">
                            SignUp
                        </button>
                    </div>

                    <!--<div class="text-center w-full p-t-12 p-b-12">
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
                    </a>-->

                    <div class="text-center w-full p-t-4">
                        <span class="txt1">
                            Already Signed?
                        </span>

                        <a class="txt1 bo1 hov1" href="<?php echo e(route('login')); ?>">
                            Login now                           
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.reg_forms_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/auth/register.blade.php ENDPATH**/ ?>