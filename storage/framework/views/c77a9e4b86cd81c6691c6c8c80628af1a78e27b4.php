<div class="card">
    <div class="card-body">
       <form action="<?php echo e(route('createPlaylist')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('playlists.playlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        &emsp;
        <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Add Playlist</button></center>
       </form>
    </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/playlists/create.blade.php ENDPATH**/ ?>