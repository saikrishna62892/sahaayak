
<?php $__env->startSection('name'); ?>
       Result
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items__result set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <h1 style="color: #fff;">Hi <?php echo e($user_name); ?></h1>
                    </div>
                    <div class="card mt-4 shadow-lg p-3 mb-5 bg-white rounded" >
                        <div class="card-header" align="center"><h3 style="color: #5768ad;">Metrics about your <?php echo e($assessment_name); ?></h3></div>
                        <div class="card-body">
                            <p>Hi <?php echo e($user_name); ?> we analyzed your assessment responses and here is your <?php echo e($assessment_name); ?> score : <b><?php echo e($score); ?>/<?php echo e($questions_count); ?></b>.</p>
                            <p>We gathered various data from different sources and created this metric chart below</p>

                            <table class="table table-bordered" align="center" style="max-width: 60%;">
                              <thead align="center">
                                <tr>
                                  <th scope="col" width="150">Score</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr align="center">
                                    <td>0</td>
                                    <td>You might be the happiest person in the world</td>
                                </tr>
                                <tr align="center">
                                  <td>0 to 4</td>
                                    <?php if($assessment_name  == "Depression Test"): ?>
                                        <td>No Depression</td>
                                    <?php elseif($assessment_name  == "Anxiety Test"): ?>
                                        <td>No Anxiety</td>
                                    <?php elseif($assessment_name  == "Stress Test"): ?>
                                        <td>No Stress</td>
                                    <?php elseif($assessment_name  == "Social Skills Test"): ?>
                                        <td>Good Social Skills</td>
                                    <?php elseif($assessment_name  == "Concentration"): ?>
                                        <td>Good Concentration</td>
                                    <?php elseif($assessment_name  == "Happiness Test"): ?>
                                        <td>You're happy enough</td>
                                    <?php elseif($assessment_name  == "Sleep Hygiene Test"): ?>
                                        <td>Good Sleep Hygiene</td>
                                    <?php elseif($assessment_name  == "Emotional Intelligence Test"): ?>
                                        <td>Good Emotional intelligence</td>
                                    <?php else: ?>
                                        <td>Good Healthy Lifestyle</td>
                                    <?php endif; ?>

                                  
                                </tr>
                                <tr align="center">
                                  <td>4 to 11</td>
                                  <?php if($assessment_name  == "Depression Test"): ?>
                                        <td>Mild Depression</td>
                                    <?php elseif($assessment_name  == "Anxiety Test"): ?>
                                        <td>Mild Anxiety</td>
                                    <?php elseif($assessment_name  == "Stress Test"): ?>
                                        <td>Mild Stress</td>
                                    <?php elseif($assessment_name  == "Social Skills Test"): ?>
                                        <td>Decent Social Skills</td>
                                    <?php elseif($assessment_name  == "Concentration"): ?>
                                        <td>Decent Concentration still need to work on it</td>
                                    <?php elseif($assessment_name  == "Happiness Test"): ?>
                                        <td>You're not happy enough</td>
                                    <?php elseif($assessment_name  == "Sleep Hygiene Test"): ?>
                                        <td>Decent Sleep Hygiene</td>
                                    <?php elseif($assessment_name  == "Emotional Intelligence Test"): ?>
                                        <td>Decent Emotional intelligence</td>
                                    <?php else: ?>
                                        <td>Decent Healthy Lifestyle</td>
                                    <?php endif; ?>
                                  
                                </tr>
                                 <tr align="center">
                                  <td>11 to 15</td>
                                  <?php if($assessment_name  == "Depression Test"): ?>
                                        <td>Severe Depression<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Anxiety Test"): ?>
                                        <td>Severe Anxiety<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Stress Test"): ?>
                                        <td>Severe Stress<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Social Skills Test"): ?>
                                        <td>Bad Social Skills<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Concentration"): ?>
                                        <td>Need to work on Concentration<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Happiness Test"): ?>
                                        <td>Reach out to Family or Friends<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Sleep Hygiene Test"): ?>
                                        <td>Need to work on for better sleep<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php elseif($assessment_name  == "Emotional Intelligence Test"): ?>
                                        <td>Need to work on for better Emotional Intelligence<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php else: ?>
                                        <td>Need to work on for better Healthy Lifestyle<br>Contact us : <a href="<?php echo e(url('/#talk_to_us')); ?>" style="color: #5768ad;">Click here</a></td>
                                    <?php endif; ?>
                                  
                                </tr>
                              </tbody>
                            </table>




                            <center><a href="<?php echo e(url('/')); ?>" class="btn primary-btn">Return Home</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hero Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/survey/result.blade.php ENDPATH**/ ?>