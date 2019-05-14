<?php /* C:\xampp\htdocs\newpro\resources\views/project/post_a_project.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<div class="fre-page-wrapper">
    <div class="fre-page-title">
      <div class="container">
         <h2>submit-project</h2>
      </div>
    </div>
    <div class="container">    
        <div class="fre-post-project-box">
                      <form action="/hirer/post" method="POST">
                        <?php echo csrf_field(); ?>
                         <div class="step-post-project" id="fre-post-project">
                            <h2>Your Project Details</h2>
                                <!-- <div class="fre-input-field">
                                   <label class="fre-field-title" for="project_category">Creator   Name</label>
                                    <input class="input-item text-field" id="fre-project-title" type="text" name="creator_name">

                                </div>
 -->
                            <div class="fre-input-field">
                               <label class="fre-field-title" for="fre-project-title">Your project title</label>
                               <input class="input-item text-field" id="fre-project-title" type="text" name="project_title">
                            </div>
                            <div class="fre-input-field">
                               <label class="fre-field-title" for="fre-project-describe">Describe what you need done</label>
                               <div id="wp-post_content-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
                                  <div id="wp-post_content-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="20" autocomplete="off" cols="40" name="project_body" id="post_content"></textarea></div>
                               </div>
                            </div>
                          
                            <div class="fre-input-field">
                               <label class="fre-field-title" for="skill">What skills do you require?</label>
                               <input class="input-item text-field" id="fre-project-title" type="text" name="skills_required">
                            </div>

                            <div class="fre-input-field">
                               <label class="fre-field-title" for="skill">Total Cost</label>
                               <input class="input-item text-field" id="fre-project-title" type="number" name="cost_per_hour">
                            </div>
                           
                         
                            
                            <div class="fre-post-project-btn">
                               <button class="fre-btn fre-post-project-next-btn primary-bg-color" type="submit">Submit Project</button>
                            </div>
                         </div>
                      </form>
        </div>
    </div>
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>