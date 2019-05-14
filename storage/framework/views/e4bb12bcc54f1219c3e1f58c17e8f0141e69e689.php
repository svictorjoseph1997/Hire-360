<?php /* C:\xampp\htdocs\newpro\resources\views/project/in_project.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="fre-page-wrapper">
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

                                    <form action="<?php echo e(url('project_complete')); ?>" method="POST">
                                       <?php echo csrf_field(); ?>
                                       <li class="project-item">
                                          <div class="project-list-wrap">
                                             <h2 class="project-list-title">
                                                
                                                	<input type="text" readonly style="background-color: transparent;border: 0px solid;height: 20px;width: 160px;color: skyblue;" name="project_title" value="<?php echo e($project->project_title); ?>">
                                             </h2>
                                             <div class="project-list-info">
                                                <span><?php echo e($project->created_at); ?></span>
                                                <b><input type="text" readonly style="background-color: transparent;border: 0px solid;height: 20px;width: 160px;color: black" name="creator_name" value="<?php echo e($project->creator_name); ?>"></b>
                                             </div>
                                             <div class="project-list-desc">
                                                <p>  <?php echo e($project->project_body); ?>  </p>
                                             </div>
                                             <div class="project-list-skill"><span class="fre-label"><a href="#"><?php echo e($project->skills_required); ?></a></span></div>
                                          </div>
                                       </li>
                                 </ul>
                                       <?php  if($project->status=='NC'){ ?>
                                       <button type="submit">Finish</button>
                                       <?php } ?>
                                    </form>
                                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isHireling')): ?>
                                          <?php  if($project->status=='C'){ ?>
                                             <form action="<?php echo e(url('generate_invoice')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input style="display: none" type="text" name="project_title" value="<?php echo e($project->project_title); ?>">
                                                <input  style="display: none" type="text" name="cost" value="<?php echo e($project->cost_per_hour); ?>">
                                                <input type="submit" value="Generate Invoice">
                                             </form>
                                          <?php } ?>
                                       <?php endif; ?>

                                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isHirer')): ?>
                                          <form action="<?php echo e(url('feedback')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                
                                                <input type="submit" value="Give a Feedback">
                                             </form>
                                       <?php endif; ?>
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