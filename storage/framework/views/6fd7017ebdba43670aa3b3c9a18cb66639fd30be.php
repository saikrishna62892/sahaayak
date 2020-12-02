<div class="form-group">
            <label for="playlistSource">Enter playlist source</label>
            <input type="text" class="form-control" name="playlistSource" id="playlistSource" aria-describedby="playlistSourceHelp" placeholder="Your playlist source here..." value="<?php echo e(old('playlistSource') ?? $playlist->playlistSource); ?>" required autocomplete="off" >
            <?php $__errorArgs = ['playlistSource'];
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
            <label for="playlistTag">Enter playlist tags</label>
            <input type="text" class="form-control" name="playlistTag" id="playlistTag" aria-describedby="playlistTagHelp" placeholder="Your playlist tags here..." value="<?php echo e(old('playlistTag') ?? $playlist->playlistTag); ?>" required autocomplete="off" >
            <?php $__errorArgs = ['playlistTag'];
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
            <label for="playlistURL">Enter playlist URL</label>
            <input type="text" class="form-control" name="playlistURL" id="playlistURL" aria-describedby="playlistURLHelp" placeholder="Your playlist URL here..." value="<?php echo e(old('playlistURL') ?? $playlist->playlistURL); ?>" required autocomplete="off" >
            <?php $__errorArgs = ['playlistURL'];
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
            <input type="file" class="custom-file-input" id="customFile" name="image" value="<?php echo e(old('image') ?? \Storage::disk('s3')->url('uploads/playlist/img/'.$playlist->image)); ?>" required autocomplete="off" >
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
        </div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/playlists/playlist.blade.php ENDPATH**/ ?>