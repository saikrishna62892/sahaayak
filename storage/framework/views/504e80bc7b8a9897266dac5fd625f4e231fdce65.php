            <div class="card">
                <div class="card-body">
                   <form action="<?php echo e(route('storenews')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>  

                    <?php echo $__env->make('news.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
                    &emsp;
                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Post News</button></center>
                   </form>
                </div>
            </div><?php /**PATH C:\sahaayak\resources\views/news/create.blade.php ENDPATH**/ ?>