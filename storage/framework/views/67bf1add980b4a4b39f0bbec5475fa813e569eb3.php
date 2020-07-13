

<?php $__env->startSection('name'); ?>
    <?php echo e($admin_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
		
<br>	
<div class="container" id="stats">
    <h4 align="center">Site Analytics</h4>
    <br>
	<div class="row">
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
		        <div class="card-body">
			        <h5 class="card-title" align="center">Users</h5>
			        <h1 align="center"><?php echo e($users_count); ?></h1>
			        <p class="card-text" align="center">Active Users</p>
			        <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
		    </div>
		</div>
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
		        <div class="card-body">
			        <h5 class="card-title" align="center">Volunteers</h5>
			        <h1 align="center"><?php echo e($volunteers_count); ?></h1>
			        <p class="card-text" align="center">Applied Volunteers</p>
			        <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card shadow p-4 mb-5 bg-white rounded">
			    <div class="card-body">
			        <h5 class="card-title" align="center">Badges</h5>
			        <h1 align="center"><?php echo e($badges); ?></h1>
			        <p class="card-text" align="center">Active Volunteers</p>
			        <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
			    </div>
			</div>
		</div>
        <div class="col-sm-3">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title" align="center">Talks</h5>
                    <h1 align="center"><?php echo e($talks_count); ?></h1>
                    <p class="card-text" align="center">#expert talks</p>
                    <center><a href="https://analytics.google.com/analytics/web/#/report-home/a171070217w237922628p222495327" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
                </div>
            </div>
        </div>
	</div>
</div>
<br>

<!-- flash messages section -->
<div class="container">
    <?php if(session()->has('message')): ?>
    <center><div class="alert alert-success"><?php echo e(session()->get('message')); ?></div></center>
    <?php endif; ?>
</div>

<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Form Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#dialyquote" role="tab">Dialy Quote</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#expert_talks" role="tab">Expert Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#inspire_me" role="tab">Inspire_me</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#videos" role="tab">Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#playlists" role="tab">Playlists</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#assessments" role="tab">Assessments</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- Dialy Quote Form begin  -->
                    <div class="tab-pane fade show active" id="dialyquote" role="tabpanel">
                        <?php echo $__env->make('quotes.dialyquote', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- Dialy Quote Form end -->

                    <!-- Expert_talks form begin -->
                    <div class="tab-pane fade" id="expert_talks" role="tabpanel">
                        <h4 align="center">Expert Talks Form</h4>
                        <?php echo $__env->make('talks.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- Expert_talks form end -->

                    <!-- news form begin -->
                     <div class="tab-pane fade" id="news" role="tabpanel">
                        <h4 align="center">News Form</h4>
                        <?php echo $__env->make('news.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- news form end -->

                    <!-- inspire_me form begin -->
                    <div class="tab-pane fade" id="inspire_me" role="tabpanel">
                        <h4 align="center">Inspire Me Form</h4>
                        <?php echo $__env->make('quotes.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <!-- videos form begin -->
                    <div class="tab-pane fade" id="videos" role="tabpanel">
                        <h4 align="center">Videos Form</h4>
                        <?php echo $__env->make('video.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- videos form end -->

                    <!-- playlists form begin -->
                    <div class="tab-pane fade" id="playlists" role="tabpanel">
                        <h4 align="center">Playlists Form</h4>
                         <?php echo $__env->make('playlists.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
                    </div>
                    <!-- playlists form end -->

                    <!-- assessments form begin -->
                    <div class="tab-pane fade" id="assessments" role="tabpanel">
                        <?php echo $__env->make('questionnaire.allquestionnaires', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- assessments form end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->
<br>



<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Shared Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#shared_news" role="tab">News</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_talks" role="tab">Talks</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_inspire_me" role="tab">Quotes</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_videos" role="tab">Videos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_playlists" role="tab">Playlists</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#suggestions" role="tab">Suggestions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- shared_news form begin -->
                    <div class="tab-pane fade show active" id="shared_news" role="tabpanel">
                        <h4 align="center">Shared News</h4>
                        <?php echo $__env->make('news.shared_news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- shared_news form end -->
                            
                    <!-- shared_talks form begin -->
                    <div class="tab-pane fade" id="shared_talks" role="tabpanel">
                        <h4 align="center">Shared Talks</h4>
                        <?php echo $__env->make('talks.shared_talks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- shared_talks form end -->

                    <!-- shared_inspire_me form begin -->
                    <div class="tab-pane fade" id="shared_inspire_me" role="tabpanel">
                        <h4 align="center">Shared Quotes</h4>
                        <?php echo $__env->make('quotes.shared_quotes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    
                    </div>
                    <!-- shared_inspire_me form end -->

                    <!-- shared_videos form begin -->
                    <div class="tab-pane fade" id="shared_videos" role="tabpanel">
                        <h4 align="center">Shared Videos</h4>
                        <?php echo $__env->make('video.shared_videos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- shared_videos form end -->

                    <!-- shared_playlists form begin -->
                    <div class="tab-pane fade" id="shared_playlists" role="tabpanel">
                        <h4 align="center">Shared Playlists</h4>
                        <?php echo $__env->make('playlists.shared_playlists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    
                    </div>
                    <!-- shared_playlists form end -->   

                     <!-- assessments form begin -->
                    <div class="tab-pane fade" id="suggestions" role="tabpanel">
                        <h4 align="center">All Assessments</h4>
                        <?php echo $__env->make('suggestions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- assessments form end -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->


    <div class="main-content-inner" id="table">
    	<div class="row">
        <!-- Progress Table start -->
        <div class="col-12 mt-5">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h4 class="header-title" align="center">Pending Volunteers List</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Verification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1 ?>
                                    <?php $__currentLoopData = $unapprovedVolunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unapprovedVolunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td scope="row"><?php echo e($count++); ?></td>
                                        <td><?php echo e($unapprovedVolunteer->name); ?></td>
                                        <td><?php echo e($unapprovedVolunteer->phone); ?></td>
                                        <td>
                                            <?php echo e($unapprovedVolunteer->user->email); ?>

                                        </td>
                                        <td>
                                            <a href="/admin/home/volunteer/<?php echo e($unapprovedVolunteer->id); ?>/getDetails">get details</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="/admin/home/volunteer/<?php echo e($unapprovedVolunteer->id); ?>/approveVolunteer" style="background-color: #5768ad;">Approve</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Table end -->
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\sahayak1\sahaayak\resources\views/admin/dashboard_admin.blade.php ENDPATH**/ ?>