<?php /* C:\xampp\htdocs\newpro\resources\views/welcome.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<div class="fre-background" id="background_banner" style="background-image: url('https://freelanceengine.enginethemes.com/wp-content/themes/freelanceengine/img/fre-bg.png');">
    <div class="fre-bg-content">
        <div class="container">
            
            <?php if(auth()->guard()->guest()): ?>
            <h1 id="title_banner">Find freelance jobs or find perfect hirelings</h1>
            <a class="fre-btn primary-bg-color" href="register/hirer">Hire </a>
            <a class="fre-btn primary-bg-color" href="register/hireling"> Work </a>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isHirer')): ?>
            <h1 id="title_banner">Find perfect hirelings or post a project</h1>
            <a class="fre-btn primary-bg-color" href="hirer/post_a_project">Post a Project </a>
            <a class="fre-btn primary-bg-color" href="register/index-2.html">Find Hireling </a>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isHireling')): ?>
            <h1 id="title_banner">Look for freelance jobs or update profile</h1>
            <a class="fre-btn primary-bg-color" href="register/index.html">Find Projects </a>
            <a class="fre-btn primary-bg-color" href="register/index-2.html">Update Profile </a>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<!-- Block Banner -->
<!-- Block How Work -->
<div class="fre-how-work">
    <div class="container">
        <h2 id="title_work">How Hire360 works?</h2>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="fre-work-block">
                    <span>
                        <img src="https://freelanceengine.enginethemes.com/wp-content/themes/freelanceengine/img/1.png" id="img_work_1" alt="">
                        </span>
                        <p id="desc_work_1">Post projects to tell us what you need done</p>
                    </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fre-work-block">
                    <span>
                        <img src="https://freelanceengine.enginethemes.com/wp-content/themes/freelanceengine/img/2.png" id="img_work_2" alt="">
                    </span>
                    <p id="desc_work_2">Browse profiles, reviews, then hire your most favorite and start project</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fre-work-block">
                    <span>
                        <img src="https://freelanceengine.enginethemes.com/wp-content/themes/freelanceengine/img/3.png" id="img_work_3" alt="">
                    </span>
                    <p id="desc_work_3">Use FreelanceEngine platform to chat and share files</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fre-work-block">
                    <span>
                        <img src="https://freelanceengine.enginethemes.com/wp-content/themes/freelanceengine/img/4.png" id="img_work_4" alt="">
                    </span>
                    <p id="desc_work_4">With our protection, money is only paid for work you authorize</p>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- Block How Work -->
                <!-- List Profiles -->
<div class="fre-perfect-freelancer">
    <div class="container">
        <h2 id="title_freelance">Find perfect freelancers for your projects</h2>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="fre-freelancer-wrap">
                    <a class="free-avatar" href="https://freelanceengine.enginethemes.com/author/ducnguyen/">
                        <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Duc-Nguyen.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' />
                    </a>
                    <h2>
                        <a href="https://freelanceengine.enginethemes.com/author/ducnguyen/">Duc Nguyen</a>
                    </h2>
                    <p class="secondary-color">Full-stack developer</p>
                    <div class="free-rating rate-it" data-score="4.833333333333333"></div>
                    <div class="free-hourly-rate">
                        <span>$47.00</span>/hr                          
                    </div>
                    <div class="free-experience">
                        <span>6 years experience</span>
                        <span>3 projects worked</span>
                    </div>
                    <div class="free-skill">
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=c-programming">C# Programming</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=ios">IOS</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=javascript">Javascript</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="fre-freelancer-wrap">
                    <a class="free-avatar" href="https://freelanceengine.enginethemes.com/author/martinharvey/">
                        <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Martin-Harvey.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' />
                    </a>
                    <h2>
                        <a href="https://freelanceengine.enginethemes.com/author/martinharvey/">Martin Harvey</a>
                    </h2>
                    <p class="secondary-color">Programing &amp; Development</p>
                    <div class="free-rating rate-it" data-score="4.666666666666667"></div>
                    <div class="free-hourly-rate">
                        <span>$30.00</span>/hr                          
                    </div>
                    <div class="free-experience">
                        <span>11 years experience</span>
                        <span>3 projects worked</span>
                    </div>
                    <div class="free-skill">
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=net-framework">.NET Framework</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=3d-modeling-cad">3D Modeling &amp; CAD</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=wordpress">WordPress</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="fre-freelancer-wrap">
                    <a class="free-avatar" href="https://freelanceengine.enginethemes.com/author/fadilaahmed/">
                        <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/09/Fadila-Ahmed.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' />
                    </a>
                    <h2>
                        <a href="https://freelanceengine.enginethemes.com/author/fadilaahmed/">Fadila Ahmed</a>
                    </h2>
                    <p class="secondary-color">Content Writer</p>
                    <div class="free-rating rate-it" data-score="4.5"></div>
                    <div class="free-hourly-rate">
                        <span>$22.00</span>/hr                          
                    </div>
                    <div class="free-experience">
                        <span>4 years experience</span>
                        <span>1 project worked</span>
                    </div>
                    <div class="free-skill">
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=article-rewriting">Article Rewriting</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=content-writing">Content Writing</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=copy-writting">Copy Writting</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="fre-freelancer-wrap">
                    <a class="free-avatar" href="https://freelanceengine.enginethemes.com/author/taikiyamada/">
                        <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Taiki-Yamada-1.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' />
                    </a>
                    <h2>
                        <a href="https://freelanceengine.enginethemes.com/author/taikiyamada/">Taiki Yamada</a>
                    </h2>
                    <p class="secondary-color">Graphic Designer</p>
                    <div class="free-rating rate-it" data-score="4"></div>
                    <div class="free-hourly-rate">
                        <span>$20.00</span>/hr                          
                    </div>
                    <div class="free-experience">
                        <span>1 year experience</span>
                        <span>1 project worked</span>
                    </div>
                    <div class="free-skill">
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=3d-modelling">3D Modelling</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=animation">Animation</a>
                        </span>
                        <span class="fre-label">
                            <a href="https://freelanceengine.enginethemes.com/profiles/?skill_profile=illustration">Illustration</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="fre-perfect-freelancer-more">
            <a class="fre-btn-o primary-color" href="profiles/index.html">See all freelancers</a>
        </div>
    </div>
</div>
                <!-- List Profiles -->
                <!-- List Projects -->
<div class="fre-jobs-online">
    <div class="container">
        <h2 id="title_project">Browse numerous freelance jobs online</h2>
        <ul class="fre-jobs-list">
            <li>
                <div class="jobs-title">
                    <p>WordPress Plugins For Gravatars, Authors and Tweets</p>
                </div>
                <div class="jobs-date">
                    <p>October 26, 2016</p>
                </div>
                <div class="jobs-price">
                    <p>$244.00</p>
                </div>
                <div class="jobs-view">
                    <a href="https://freelanceengine.enginethemes.com/project/wordpress-plugins-for-gravatars-authors-and-tweets/">View details</a>
                </div>
            </li>
            <li>
                <div class="jobs-title">
                    <p>Dubai &amp; Gulf Blog Articles</p>
                </div>
                <div class="jobs-date">
                    <p>October 26, 2016</p>
                </div>
                <div class="jobs-price">
                    <p>$25.00</p>
                </div>
                <div class="jobs-view">
                    <a href="https://freelanceengine.enginethemes.com/project/dubai-gulf-blog-articles/">View details</a>
                </div>
            </li>
            <li>
                <div class="jobs-title">
                    <p>Wanted: Human Resource Manager for Interview</p>
                </div>
                <div class="jobs-date">
                    <p>October 26, 2016</p>
                </div>
                <div class="jobs-price">
                    <p>$50.00</p>
                </div>
                <div class="jobs-view">
                    <a href="https://freelanceengine.enginethemes.com/project/wanted-human-resource-manager-for-interview/">View details</a>
                </div>
            </li>
            <li>
                <div class="jobs-title">
                    <p>Product Description Writer Needed Immediately</p>
                </div>
                <div class="jobs-date">
                    <p>October 26, 2016</p>
                </div>
                <div class="jobs-price">
                    <p>$45.00</p>
                </div>
                <div class="jobs-view">
                    <a href="https://freelanceengine.enginethemes.com/project/product-description-writer-needed-immediately/">View details</a>
                </div>
            </li>
            <li>
                <div class="jobs-title">
                    <p>Modern Looking Logo</p>
                </div>
                <div class="jobs-date">
                    <p>October 26, 2016</p>
                </div>
                <div class="jobs-price">
                    <p>$10.00</p>
                </div>
                <div class="jobs-view">
                    <a href="https://freelanceengine.enginethemes.com/project/modern-looking-logo/">View details</a>
                </div>
            </li>
            <li>
                <div class="jobs-title">
                    <p>Search Engine Optimization &amp; Some Posting- Revised Scope</p>
                </div>
                <div class="jobs-date">
                    <p>October 26, 2016</p>
                </div>
                <div class="jobs-price">
                    <p>$75.00</p>
                </div>
                <div class="jobs-view">
                    <a href="https://freelanceengine.enginethemes.com/project/search-engine-optimization-some-posting-revised-scope/">View details</a>
                </div>
            </li>
        </ul>
        <div class="fre-jobs-online-more">
            <a class="fre-btn-o primary-color" href="https://freelanceengine.enginethemes.com/projects/">See all jobs</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>