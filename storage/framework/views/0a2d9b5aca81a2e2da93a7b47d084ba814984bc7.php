<?php /* C:\xampp\htdocs\newpro\resources\views/project/index.blade.php */ ?>
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
                        <script type="data/json" id="search_data"></script>
                        <div class="project-filter-header visible-sm visible-xs">
                            <a class="project-filter-title" href="">Advance search</a>
                        </div>
                        <div class="fre-project-list-filter">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="fre-input-field">
                                            <label for="s" class="fre-field-title">Keyword</label>
                                            <input class="keyword search" id="s" type="text" name="s"
                               placeholder="Search projects by keyword">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fre-input-field dropdown">
                                                <label for="skills" class="fre-field-title">Skills</label>
                                                <input id="skills" class="dropdown-toggle fre-skill-field" readonly type="text"
                               placeholder="Search project by skills" data-toggle="dropdown">
                                                    <div class="dropdown-menu dropdown-menu-skill">
                                                        <div class="search-skill-dropdown">
                                                            <input class="fre-search-skill-dropdown" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4">
                                                    <div class="fre-input-field">
                                                        <label for="project_category"
                               class="fre-field-title">Category</label>
                               <br>
                                                        <select data-chosen-width="100%" style="width:80%;height: 7%;" data-chosen-disable-search="" data-placeholder="Select categories" name='project_category' id='project_category' class='' >
                                                            <option value=''>Select category</option>
                                                            <option class=" technical-writing cat-167 level-1" value="technical-writing">Technical Writing</option>
                                                            <option class=" translation cat-166 level-1" value="translation">Translation</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="display: block;">
                                                    <div class="fre-input-field project-number-bids">
                                                        <label for="number_bids" class="fre-field-title">Bid</label><br>
                                                        <select name="number_bids" id="number-bids" style="width:80%;height: 7%;" class="">
                                                            <option value="">Any Bids</option>
                                                            <option value="0,10">0 - 10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fre-input-field">
                                                        <label for="country" class="fre-field-title">Location</label><br>
                                                        <select data-chosen-width="100%" style="width:80%;height: 7%;" data-chosen-disable-search="" data-placeholder="Select country" name='country' id='country' class='' >
                                                            <option value=''>Select country</option>
                                                            <option class=" vietnam cat-345 level-0" value="vietnam">Vietnam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fre-input-field fre-budget-field">
                                                        <label for="budget" class="fre-field-title">Budget($)</label>
                                                        <input id="budget" class="filter-budget-min" type="number" name="min_budget" value="0" min="0">
                                                            <span>-</span>
                                                            <input class="filter-budget-max" type="number" name="max_budget"
                               value="3000" min="0">
                                                                <input id="et_budget" type="hidden" name="et_budget" value="0,3000"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="project-filter-clear clear-filter secondary-color" href="">Clear all filters</a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="fre-project-list-box">
                                            <div class="fre-project-list-wrap">
                                                <div class="fre-project-result-sort">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-push-8">
                                                            <div class="fre-project-sort">
                                                                <select class="fre-chosen-single sort-order" id="project_orderby"
                                                            name="orderby">
                                                                    <option value="date">Latest Projects</option>
                                                                    <option value="et_budget">Highest Budget</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 col-sm-pull-4">
                                                            <div class="fre-project-result">
                                                                <p>
                                                                    <span class="plural ">
                                                                        <span class="found_post">60</span> projects found
                                                                    </span>
                                                                    <span class="singular hide">
                                                                        <span class="found_post">60</span> project found
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="fre-project-list project-list-container">
                                                    <li class="project-item">
                                                        <div class="project-list-wrap">
                                                            <h2 class="project-list-title">
                                                                <a  class="secondary-color" href="https://freelanceengine.enginethemes.com/project/wordpress-plugins-for-gravatars-authors-and-tweets/" title="WordPress Plugins For Gravatars, Authors and Tweets">WordPress Plugins For Gravatars, Authors and Tweets</a>
                                                            </h2>
                                                            <div class="project-list-info">
                                                                <span>Posted October 26, 2016</span>
                                                                <span>5 Bids</span>
                                                                <span>Australia</span>
                                                                <span>$244.00</span>
                                                            </div>
                                                            <div class="project-list-desc">
                                                                <p>Job 1: I have a WordPress site where a lot of users make comments. However, many users don’t have a gravatar image. I want to encourage all users to set&hellip;</p>
                                                            </div>
                                                            <div class="project-list-skill">
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=html">HTML</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=jquery">jQuery</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=plugin">Plugin</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=sql">SQL</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=wordpress">WordPress</a>
                                                                </span>
                                                            </div>
                                                            <!-- <div class="project-list-bookmark"><a class="fre-bookmark" href="">Bookmark</a></div> -->
                                                        </div>
                                                    </li>
                                                    <li class="project-item">
                                                        <div class="project-list-wrap">
                                                            <h2 class="project-list-title">
                                                                <a  class="secondary-color" href="https://freelanceengine.enginethemes.com/project/dubai-gulf-blog-articles/" title="Dubai &amp; Gulf Blog Articles">Dubai &amp; Gulf Blog Articles</a>
                                                            </h2>
                                                            <div class="project-list-info">
                                                                <span>Posted October 26, 2016</span>
                                                                <span>0 Bids</span>
                                                                <span>Canada</span>
                                                                <span>$25.00</span>
                                                            </div>
                                                            <div class="project-list-desc">
                                                                <p>I’m looking for someone based in the UAE to write weekly articles for a recruitment blog. The articles will cover topics on topics such as: 1. How to land a&hellip;</p>
                                                            </div>
                                                            <div class="project-list-skill">
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=content-writing">Content Writing</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=writing">Writing</a>
                                                                </span>
                                                            </div>
                                                            <!-- <div class="project-list-bookmark"><a class="fre-bookmark" href="">Bookmark</a></div> -->
                                                        </div>
                                                    </li>
                                                    <li class="project-item">
                                                        <div class="project-list-wrap">
                                                            <h2 class="project-list-title">
                                                                <a  class="secondary-color" href="https://freelanceengine.enginethemes.com/project/wanted-human-resource-manager-for-interview/" title="Wanted: Human Resource Manager for Interview">Wanted: Human Resource Manager for Interview</a>
                                                            </h2>
                                                            <div class="project-list-info">
                                                                <span>Posted October 26, 2016</span>
                                                                <span>1 Bid</span>
                                                                <span>China</span>
                                                                <span>$50.00</span>
                                                            </div>
                                                            <div class="project-list-desc">
                                                                <p>Human Resource Manager wanted for interview. Tell me about YOUR experience terminating an employee AFTER using the Performance Management process. You will need to tell me why counselling did not&hellip;</p>
                                                            </div>
                                                            <div class="project-list-skill">
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=payroll">Payroll</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=recruitment">Recruitment</a>
                                                                </span>
                                                            </div>
                                                            <!-- <div class="project-list-bookmark"><a class="fre-bookmark" href="">Bookmark</a></div> -->
                                                        </div>
                                                    </li>
                                                    <li class="project-item">
                                                        <div class="project-list-wrap">
                                                            <h2 class="project-list-title">
                                                                <a  class="secondary-color" href="https://freelanceengine.enginethemes.com/project/product-description-writer-needed-immediately/" title="Product Description Writer Needed Immediately">Product Description Writer Needed Immediately</a>
                                                            </h2>
                                                            <div class="project-list-info">
                                                                <span>Posted October 26, 2016</span>
                                                                <span>1 Bid</span>
                                                                <span>France</span>
                                                                <span>$45.00</span>
                                                            </div>
                                                            <div class="project-list-desc">
                                                                <p>Need experienced writer(s) for product descriptions for website/online store. Total of 60 products. I will give you the manufacturer content, which includes description, features and pictures – need you to&hellip;</p>
                                                            </div>
                                                            <div class="project-list-skill">
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=copywriting">Copywriting</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=product-descriptions">Product Descriptions</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=sales-writing">Sales Writing</a>
                                                                </span>
                                                                <span class="fre-label">
                                                                    <a href="https://freelanceengine.enginethemes.com/projects/?skill_project=writing">Writing</a>
                                                                </span>
                                                            </div>
                                                            <!-- <div class="project-list-bookmark"><a class="fre-bookmark" href="">Bookmark</a></div> -->
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="profile-no-result" style="display: none;">
                                                    <div class="profile-content-none">
                                                        <p>There are no results that match your search!</p>
                                                        <ul>
                                                            <li>Try more general terms</li>
                                                            <li>Try another search method</li>
                                                            <li>Try to search by keyword</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fre-paginations paginations-wrapper">
                                                <div class="paginations" >
                                                    <span aria-current='page' class='page-numbers current'>1</span>
                                                    <a class='page-numbers' href='#'>2</a>
                                                    <a class='page-numbers' href='#'>3</a>
                                                    <span class="page-numbers dots">&hellip;</span>
                                                    <a class='page-numbers' href='#'>6</a>
                                                    <a class="next page-numbers" href="#">next 
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>