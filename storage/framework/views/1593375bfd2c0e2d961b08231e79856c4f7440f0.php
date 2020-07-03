<div class="card">
    <div class="card-body">
       <form action="<?php echo e(route('createPlaylist')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="playlistSource">Source of the Playlist</label>
            <input type="text" class="form-control" name="playlistSource" id="playlistSource" aria-describedby="playlistSourceHelp" placeholder="Enter the playlist source">
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
            <label for="playlistTag">Playlist Tags</label>
            <input type="text" class="form-control" name="playlistTag" id="playlistTag" aria-describedby="playlistTagHelp" placeholder="Enter playlist Tags separated by comma">
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
            <label for="playlistURL">Playlist URL</label>
            <input type="text" class="form-control" name="playlistURL" id="playlistURL" aria-describedby="playlistURLHelp" placeholder="Enter playlist URL">
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
            <input type="file" class="custom-file-input" id="customFile" name="image">
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
        </div>
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Add Playlist</button></center>
       </form>
    </div>
</div><?php /**PATH C:\sahaayak\resources\views/playlists/create.blade.php ENDPATH**/ ?>