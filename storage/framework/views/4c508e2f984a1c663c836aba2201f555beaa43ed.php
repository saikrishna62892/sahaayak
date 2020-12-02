

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
			        <p class="card-text" align="center">Active Users in Sahaayak</p>
			        <center><a href="/admin/getOverallReport" class="btn btn-primary" target="_blank" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
		    </div>
		</div>
        <div class="col-sm-6">
            <div class="card shadow p-0 mb-5 bg-white rounded">
                <div class="card-body">
                    <?php $curr_date = \Carbon\Carbon::now(); ?>
                    <p class="card-text" align="center" style="padding: 0px 0px 0px 0px;"><b><?php echo e($curr_date->format('F')); ?> Appointments</b></p>
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Counsellor Name</th>
                                <th scope="col">#Appointments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=1; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $counsellors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counsellor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>    
                                <td><?php echo e($count++); ?></td>                       
                                <td><?php echo e($counsellor->name); ?></td>
                                <?php $app_count = App\Appointment::where('counsellor_id',$counsellor->id)->whereYear('created_at', Carbon\Carbon::now()->year)->whereMonth('created_at', Carbon\Carbon::now()->month)->count(); ?>

                                <td><?php echo e($app_count); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <h1 align="center">-NA-</h1>
                            <p class="card-text" align="center">No Appointments Available</p>
                            <?php endif; ?>
                         </tbody>
                    </table>
                    <center>
                        
                        <a href="/admin/getCurrentMonthReport" target="_blank" class="btn btn-primary" style="background-color: #5768ad;">Download <?php echo e($curr_date->format('F')); ?> Report</a>
                    </center>
                </div>
            </div>
        </div>
		<div class="col-sm-3">
		    <div class="card shadow p-4 mb-5 bg-white rounded">
		        <div class="card-body">
			        <h5 class="card-title" align="center">Counsellors</h5>
			        <h1 align="center"><?php echo e($counsellors_count); ?></h1>
			        <p class="card-text" align="center">Active Counsellors in Sahaayak</p>
			        <center><a href="/admin/getOverallReport" target="_blank" class="btn btn-primary" style="background-color: #5768ad;">See Analytics</a></center>
		        </div>
			</div>
		</div>
	</div>
</div>
<br>

<!-- flash messages section begin -->
    <div class="flash-message">
      <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Session::has('alert-' . $msg)): ?>
            <center><p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?></p></center>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<!-- flash messages section end -->


<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <h4 class="header-title">Form Handles</h4>
            <div class="d-sm-flex justify-content-between align-items-center">
                
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist" style="float: right;">
                        <li>
                            <a class="active" data-toggle="tab" href="#addcounsellor" role="tab">Add Counsellor</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#dialyquote" role="tab">Dialy Quote</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#expert_talks" role="tab">Talks</a>
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
                            <a data-toggle="tab" href="#gallery" role="tab">Gallery</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#assessments" role="tab">Assessments</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reports" role="tab">Reports</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- Add Counsellor Form begin  -->
                    <div class="tab-pane fade show active" id="addcounsellor" role="tabpanel">
                        <?php echo $__env->make('counsellors.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- Add Counsellor Form end -->
                    
                    <!-- Dialy Quote Form begin  -->
                    <div class="tab-pane fade" id="dialyquote" role="tabpanel">
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
                    <!-- Galley form begin -->
                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                        <?php echo $__env->make('gallery.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>          
                    <!-- Gallery form end -->

                    <!-- assessments form begin -->
                    <div class="tab-pane fade" id="assessments" role="tabpanel">
                        <?php echo $__env->make('questionnaire.allquestionnaires', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- assessments form end -->
                    <!-- assessments form begin -->
                    <div class="tab-pane fade" id="reports" role="tabpanel">
                        <?php echo $__env->make('admin.reportForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- assessments form end -->
                </div>
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
                            <a class="active" data-toggle="tab" href="#counsellor_accepted" role="tab">Counsellors</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#shared_news" role="tab">News</a>
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
                            <a data-toggle="tab" href="#shared_gallery" role="tab">Gallery</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#comments" role="tab">Comments</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#suggestions" role="tab">Suggestions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- counsellors_accepted form begin -->
                    <div class="tab-pane fade show active" id="counsellor_accepted" role="tabpanel">
                        <h4 align="center">Counsellors Data</h4>
                        <?php echo $__env->make('counsellors.counsellor_accepted', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- counsellors_accepted form end -->

                    <!-- shared_news form begin -->
                    <div class="tab-pane fade show" id="shared_news" role="tabpanel">
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

                    <!-- shared_talks form begin -->
                    <div class="tab-pane fade" id="comments" role="tabpanel">
                        <h4 align="center">User Comments</h4>
                        <?php echo $__env->make('admin.show_comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- shared_talks form end --> 

                    <!-- shared_talks form begin -->
                    <div class="tab-pane fade" id="shared_gallery" role="tabpanel">
                        <h4 align="center">Shared Gallery</h4>
                        <?php echo $__env->make('gallery.shared_gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- shared_talks form end -->   

                     <!-- assessments form begin -->
                    <div class="tab-pane fade" id="suggestions" role="tabpanel">
                        <h4 align="center">Suggestions</h4>
                        <?php echo $__env->make('suggestions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- assessments form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->

<!--  <div class="main-content-inner" id="table">
    	<div class="row"> -->
        <!-- Progress Table start -->
        <!--<div class="col-12 mt-5">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h4 class="header-title" align="center">Pending Volunteers List(Currently Disabled)</h4>
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
                                        <th scope="col" colspan="2">Verification</th>
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
                                            <a href="/admin/home/volunteer/<?php echo e($unapprovedVolunteer->id); ?>/getDetails" style="color: #5768ad;">get details</a>
                                        </td>
                                        <td colspan="2">
                                            <a href="/admin/home/volunteer/<?php echo e($unapprovedVolunteer->id); ?>/approveVolunteer" style="color: #5768ad;">Approve?</a>&emsp;
                                            <a href="/admin/home/volunteer/<?php echo e($unapprovedVolunteer->id); ?>/rejectVolunteer" style="color: #5768ad;">Reject</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Progress Table end -->
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\Sahayak\sahaayak\resources\views/admin/dashboard_admin.blade.php ENDPATH**/ ?>