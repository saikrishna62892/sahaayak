<div class="card">
                <div class="card-body">
                   <form action="<?php echo e(route('storecounsellor')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>  

                    <?php echo $__env->make('counsellors.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
                    &emsp;
                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" onclick="alert('Posted Succesfully')">Submit</button></center>
                   </form>
                </div>
            </div><?php /**PATH D:\Sahaayak\sahaayak\resources\views/counsellors/create.blade.php ENDPATH**/ ?>