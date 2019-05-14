<?php /* C:\xampp\htdocs\newpro\resources\views/project/project.blade.php */ ?>
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

                                    <form action="<?php echo e(url('apply_project')); ?>" method="POST">
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
                                       <button type="submit">Apply</button>
                                    </form>
                                 </ul>
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