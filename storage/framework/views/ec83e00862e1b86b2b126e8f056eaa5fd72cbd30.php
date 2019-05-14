<?php /* C:\xampp\htdocs\newpro\resources\views/project/hirer_applied_projects.blade.php */ ?>
<?php $__env->startSection('content'); ?>




<div class="fre-page-wrapper">
               <div class="fre-page-title">
                  <div class="container">
                     <h2>Project Responces</h2>
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
                                       <h3>Not Completed</h3>
         										<table width="100%" >
         											<tr>
         												<th>Project Name</th>
         												<th>Applicant Name</th>
         											</tr>
         											<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         											<tr>
         												<td><a href="/view_projectt/<?php echo e($project->project_title); ?>"><?php echo e($project->project_title); ?></a></td>
                                             <td><a href="/view_projectt/<?php echo e($project->project_title); ?>"><?php echo e($project->name); ?></a></td>
         											</tr>
         											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         										</table>
                                    </div>
                              </div>
                           </div>
                           </div>

                           <div class="fre-project-list-box">
                              <div class="fre-project-list-wrap">
                                 <div class="fre-project-result-sort">
                                    <div class="row">
                                       <h3>Completed</h3>
                                       <table width="100%" >
                                          <tr>
                                             <th>Project Name</th>
                                             <th>Applicant Name</th>
                                          </tr>
                                          <?php $__currentLoopData = $c_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                             <td><a href="/view_projectt/<?php echo e($project->project_title); ?>"><?php echo e($project->project_title); ?></a></td>
                                             <td><a href="/view_projectt/<?php echo e($project->project_title); ?>"><?php echo e($project->name); ?></a></td>
                                          </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </table>
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