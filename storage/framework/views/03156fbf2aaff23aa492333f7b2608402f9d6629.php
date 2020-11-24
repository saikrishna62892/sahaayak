<div class="card">
    <div class="card-body">
       <form action="/admin/home/videos" method="post">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('video.video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        &emsp;
        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Post Video</button></center>
       </form>
    </div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/video/create.blade.php ENDPATH**/ ?>