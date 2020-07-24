<div class="card">
    <div class="card-header">Details of Volunteer</div>

        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <?php echo e($unapprovedVolunteer->name); ?>

            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <?php echo e($unapprovedVolunteer->phone); ?>

            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <?php echo e($unapprovedVolunteer->user->email); ?>

            </div>
            <div class="form-group">
                <label for="name">Qualification</label>
                <?php echo e($unapprovedVolunteer->qualification); ?>

            </div>
            <div class="form-group">
                <label for="name">work</label>
                <?php echo e($unapprovedVolunteer->work); ?>

            </div>
            <div class="form-group">
                <label for="name">Insight</label>
                <?php echo e($unapprovedVolunteer->insight); ?>

            </div>
            <div class="form-group">
                <label for="name">Queries</label>
                <?php echo e($unapprovedVolunteer->queries); ?>

            </div>
            <div class="form-group">
                <label for="name">Identity</label>
                <img src="<?php echo e(asset('storage/'.$unapprovedVolunteer->file1)); ?>">
            </div>
            <div class="form-group">
                <label for="name">Work Identity</label>
                <img src="<?php echo e(asset('storage/'.$unapprovedVolunteer->file2)); ?>">
            </div>
		</div>
	</div>
</div><?php /**PATH G:\sahayak1\sahaayak\resources\views/volunteer/getDetails.blade.php ENDPATH**/ ?>