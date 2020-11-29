    <div class="wrap-input100 validate-input m-b-16">
        <input class="input100" type="text" id="name" name="name" value="<?php echo e(old('name') ?? $user->name); ?>" required autocomplete="name" autofocus placeholder="Full Name">
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
        <input class="input100" type="text" id="rollnum" name="rollnum" value="<?php echo e(old('rollnum') ?? $user->rollnum); ?>" required autocomplete="rollnum" autofocus placeholder="Roll Number/Employee ID">
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
        <input class="input100" id="email" type="email" name="email" value="<?php echo e(old('email') ?? $user->email); ?>" required autocomplete="email" placeholder="NITC Mail" pattern=".+@nitc.ac.in">
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
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid phone number is required">
        <input class="input100" type="tel" id="phone" name="phone" value="<?php echo e(old('phone') ?? $user->phone); ?>" placeholder="Phone" autocomplete="phone" required>
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
            <span class="lnr lnr-phone"></span>
        </span>
    </div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/auth/registerForm.blade.php ENDPATH**/ ?>