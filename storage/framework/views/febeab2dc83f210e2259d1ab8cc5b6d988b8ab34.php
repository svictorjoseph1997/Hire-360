<?php /* C:\xampp\htdocs\newpro\resources\views/profile/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <div class="fre-page-wrapper section-archive-profile">
        <div class="fre-page-title">
            <div class="container">
                <h2>Available Profiles</h2>
            </div>
        </div>

        <div class="fre-page-section">
            <div class="container">
                <div class="page-profile-list-wrap">
                    <div class="fre-profile-list-wrap">
						<div class="fre-profile-filter-box">
      <script type="data/json" id="search_data">
            []      </script>
      <div class="profile-filter-header visible-sm visible-xs">
          <a class="profile-filter-title" href="">Advance search</a>
      </div>
      <div class="fre-profile-list-filter">
          <form>
              <div class="row">
                  <div class="col-md-4">
                      <div class="fre-input-field">
                          <label for="keywords" class="fre-field-title">Keyword</label>
                          <input class="keyword search" id="s" type="text" name="s" placeholder="Search freelancers by keyword">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="fre-input-field dropdown">
                          <label for="skills" class="fre-field-title">Skills</label>
                          <input id="skills" class="dropdown-toggle fre-skill-field" type="text" placeholder="Search freelancers by skills" data-toggle="dropdown" readonly>
                                                                                <div class="dropdown-menu dropdown-menu-skill">
                                                                <div class="search-skill-dropdown">
                                    <input class="fre-search-skill-dropdown" type="text">
                                  </div>
                            </div>
                                                </div>
                  </div>
                  <div class="col-md-4">
                      <div class="fre-input-field">
                          <label for="total_earning" class="fre-field-title">Earning ($)</label><br>
                          <select name="earning" id="total_earning" style="width:80%;height: 7%;" class="">
                              <option value="">Any amount</option>
                              
                              <option value="10000">Greater than 10000 </option>
                          </select>
                      </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4">
                      <div class="fre-input-field project-number-worked">
                          <label for="project-number-worked" class="fre-field-title">Projects Worked</label><br>
                          <select name="total_projects_worked" style="width:80%;height: 7%;" id="project-number-worked" class="">
                              <option value="">Any projects worked</option>
                              <option value="10">0 - 10</option>
                              <option value="20">11 - 20</option>
                              <option value="30">21 - 30</option>
                              <option value="40">Greater than 30</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="fre-input-field">
                          <label for="location" class="fre-field-title">Location</label><br>
                          <select data-chosen-width="100%" data-chosen-disable-search="" style="width:80%;height: 7%;" data-placeholder="Select country" name='country' id='country' class='' >
	<option value=''>Select country</option>
	<option class=" australia cat-10 level-0" value="australia">Australia</option>
	<option class=" belgium cat-361 level-0" value="belgium">Belgium</option>
	<option class=" vietnam cat-345 level-0" value="vietnam">Vietnam</option>
</select>
                      </div>
                  </div>
                  <div class="col-md-4">
                                            <div class="fre-input-field fre-budget-field">
                          <label for="budget" class="fre-field-title">Hourly Rate ($)</label>
                          <input id="budget" class="filter-budget-min" type="number" name="min_budget" value="0" min="0">
                          <span>-</span>
                          <input class="filter-budget-max" type="number" name="max_budget" value="2500" min="0">
                          <input id="hour_rate" type="hidden" name="hour_rate" value="0,2500"/>
                          <input type="hidden" name="user_available" id="user_available" value= "yes" />
                      </div>
                  </div>
              </div>
              <a class="profile-filter-clear clear-filter secondary-color" href="">Clear all filters</a>
          </form>
      </div>
  </div>                        <div class="fre-profile-list-box">
                            <div class="fre-profile-list-wrap">
                                <div class="fre-profile-result-sort">
                                    <div class="row">
										                                        <div class="col-md-4 col-md-push-8 col-sm-5 col-sm-push-7">
											                                                <div class="fre-profile-sort">
                                                    <select class="fre-chosen-single sort-order" style="width:80%;height: 7%;" name="orderby">
                                                        <option value="date">Newest Profiles</option>
                                                        <option value="hour_rate">Highest Hourly Rate</option>
                                                        <option value="rating">Highest Rating</option>
                                                        <option value="projects_worked">Most Projects Worked</option>
                                                    </select>
                                                </div>
											                                        </div>
                                        <div class="col-md-8 col-md-pull-4 col-sm-7 col-sm-pull-5">
                                            <div class="fre-profile-result">
                                                <p>
                                                    <span class="plural "><span class="found_post">24</span> profiles available</span>
                                                    <span class="singular hide"><span class="found_post">24</span> profile available</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<ul class="fre-profile-list profile-list-container">
	<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/martinharvey/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Martin-Harvey.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/martinharvey/">Martin Harvey</a>
        </h2>
        <p class="profile-list-subtitle">Programing &amp; Development</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score="4.666666666666667"></span>
                <span>11 years experience</span>
                <span>3 projects worked</span>

                <span><b>$30.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>Howdy, I’m Martin from UK.</p> <p>With a Bachelor’s degree in Computer Science and Master’s degree in Information Technology. I’m confident to handle all projects related to Web Programming and WordPress.</p> <p>Currently, I’m a Technical Manager at E &amp; J Gallo Winery Company. At this position, I lead the development process for all major projects utilizing HTML, CSS, PHP, Flash, ActionScript, Java, C/C++, and SQL Server. Additionally, I have more than 10 years working as a WordPress developer with over 150&hellip;            </div>
        </div>
    </div>
</li>
<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/ducnguyen/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Duc-Nguyen.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/ducnguyen/">Duc Nguyen</a>
        </h2>
        <p class="profile-list-subtitle">Full-stack developer</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score="4.833333333333333"></span>
                <span>6 years experience</span>
                <span>3 projects worked</span>

                <span><b>$47.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>Hi, I&#8217;m Duc Nguyen. As a full-stack developer since 2012, I have a lot of experience in web applications and programming languages such as HTML, JavaScript, jQuery, CSS and API&#8217;s. Besides, I also have a thorough knowledge about web services (REST, SOAP, etc.). So, I can get done most of complex and  interesting projects.</p> <p>If you hire your project for me, I will do it with 100% accuracy.</p>            </div>
        </div>
    </div>
</li>
<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/morganmelvin/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Morgan-Melvin-1.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/morganmelvin/">Morgan Melvin</a>
        </h2>
        <p class="profile-list-subtitle">SEO Specialist</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score="3.5"></span>
                <span>2 years experience</span>
                <span>1 project worked</span>

                <span><b>$45.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>As a marketing executive with more than 2 years of work experience. I have a strong marketing insight and strategy background which help you promote your  product, service or brand. In addition, I can be  responsible for managing all SEO activities to help your website get higher ranking on search engines and drive high-quality traffic as well as  manage all search engine advertising such as Google, Yahoo and Bing.</p> <p>Your success is my success and I look forward to providing&hellip;            </div>
        </div>
    </div>
</li>
<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/taikiyamada/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Taiki-Yamada-1.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/taikiyamada/">Taiki Yamada</a>
        </h2>
        <p class="profile-list-subtitle">Graphic Designer</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score="4"></span>
                <span>1 year experience</span>
                <span>1 project worked</span>

                <span><b>$20.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>Hi, I’m Taiki. I have been working as a graphic design. I really love what I do. Whenever you need a logo design, 3D modelling or illustration, get in touch me.</p> <p>I can handle both large and small projects effectively!</p>            </div>
        </div>
    </div>
</li>
<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/marindairvin/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Marinda-Irvin.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/marindairvin/">Marinda</a>
        </h2>
        <p class="profile-list-subtitle">Web &amp; Graphic Designer</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score="3"></span>
                <span>6 years experience</span>
                <span>1 project worked</span>

                <span><b>$25.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>UX/UI Designer with more than 5 years experience. I&#8217;m focusing on beautiful human-centered design, interaction design for website and app.</p> <p>When you choose me as your designer, you can be sure that you&#8217;ll receive more than your expectation!</p>            </div>
        </div>
    </div>
</li>
<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/fadilaahmed/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/09/Fadila-Ahmed.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/fadilaahmed/">Fadila Ahmed</a>
        </h2>
        <p class="profile-list-subtitle">Content Writer</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score="4.5"></span>
                <span>4 years experience</span>
                <span>1 project worked</span>

                <span><b>$22.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>Hi, I’m a dedicated freelance writer who loves to write on magazines and websites. I have experienced as a copywriter for over 3 years in a Web Development &amp; Design agency. So, I have a deep knowledge of standard writing practices that is necessary for Web content writers.</p> <p>I can produce a wide variety of content for website from articles to copywriting. Whether you need content for your blog, product descriptions, or newsletters, I can work it well with high&hellip;            </div>
        </div>
    </div>
</li>

<li class="profile-item">
    <div class="profile-list-wrap">
        <a class="profile-list-avatar" href="https://freelanceengine.enginethemes.com/author/farrellmarlow/">
            <img alt='' src='https://cdn.enginethemes.com/freelanceengine/2016/08/Farrell-Marlow.jpg' class='avatar avatar-96 photo avatar-default' height='96' width='96' />        </a>
        <h2 class="profile-list-title">
            <a href="https://freelanceengine.enginethemes.com/author/farrellmarlow/">Farrell Marlow</a>
        </h2>
        <p class="profile-list-subtitle">Technical Writer</p>
        <div class="profile-list-info">
            <div class="profile-list-detail">
                <span class="rate-it" data-score=""></span>
                <span>6 years experience</span>
                <span>0 projects worked</span>

                <span><b>$23.00</b>/hr</span>
                <span style="font-weight: normal">$0 earned</span>
            </div>
            <div class="profile-list-desc">
	            <p>I&#8217;m a native English speaker from UK with  a solid background in technology and science. I can help you with your technical documentation or content writing projects that suitable for technology professionals as well as for non-technical readers. I have completed over 200 academic related project. Personally, I hold a Master&#8217;s Degree of Science at University of Birmingham.</p> <p>I hope you find me perfect for your solutions. Looking for long-term &amp; reliable partnership with my client.</p>            </div>
        </div>
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
                        </div>
						<div class="fre-paginations paginations-wrapper"><script type="application/json" class="ae_query">{"post_type":"fre_profile","post_status":"publish","orderby":"date","place_category":"","location":"","showposts":"","order":"DESC","paginate":"page"}</script><div class="paginations" ><span aria-current='page' class='page-numbers current'>1</span>
<a class='page-numbers' href='#'>2</a>
<a class='page-numbers' href='#'>3</a>
<a class="next page-numbers" href="#">next <i class="fa fa-angle-right"></i></a></div></div>                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>