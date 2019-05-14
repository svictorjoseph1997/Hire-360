<?php /* C:\xampp\htdocs\newpro\resources\views/all_feedback.blade.php */ ?>
<?php $__env->startSection('content'); ?>



<div class="fre-page-title">
      <div class="container">
         <h2>Available Projects</h2>
      </div>
   </div>
   <div class="fre-page-section section-archive-project">
      <div class="container">
         <div class="page-project-list-wrap">
            <div class="fre-project-list-wrap">
               <div class="fre-project-filter-box">
                  <script type="data/json" id="search_data">
                     []
                  </script>
               <div class="fre-project-list-box">
                  <div class="fre-project-list-wrap">
                     <div class="fre-project-result-sort">
                        <div class="row">
                           
                     </div>
                     <ul class="fre-project-list project-list-container">


<div class="fre-perfect-freelancer">
    <div class="container">
<?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-lg-10 col-md-12">
                <div class="fre-freelancer-wrap">
                    
                    <h2>
                        <a href="https://freelanceengine.enginethemes.com/author/ducnguyen/"><?php echo e($feedback->name); ?></a>
                    </h2>
                    <p class="secondary-color">Reviewd At: <?php echo e($feedback->created_at); ?></p>
                    <div class="free-rating rate-it" data-score="4.833333333333333"></div>
                    <div class="free-hourly-rate">
                        <span>Rate_Score: <?php echo e($feedback->rate); ?></span>                       
                    </div>
                    <?php echo e($feedback->review); ?>

                    <br>
                    <br>

                        <span>Reviewed by: <?php echo e($feedback->review_by); ?></span>                       


                </div>
            </div>

        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
         

                  </div>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>




<?php $__env->stopSection(); ?>                      
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>