@extends('layouts.master')


@section('content')



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

                        @foreach($projects as $project)

                        <li class="project-item">
                           <div class="project-list-wrap">
                              <h2 class="project-list-title">
                                 <a  class="secondary-color" href="https://freelanceengine.enginethemes.com/project/wordpress-plugins-for-gravatars-authors-and-tweets/" title="WordPress Plugins For Gravatars, Authors and Tweets">
                                    

                                    {{ $project->project_title}}


                                 </a>
                              </h2>
                              <div class="project-list-info">
                                 <span>{{ $project->created_at }}</span>
                                 <span>{{ $project->creator_name }}</span>
                                 
                              </div>
                              <div class="project-list-desc">
                                 <p>  {{ $project->project_body }}  </p>
                              </div>
                              <div class="project-list-skill"><span class="fre-label"><a href="https://freelanceengine.enginethemes.com/projects/?skill_project=html">{{ $project->skills_required }}</a></span></div>
                              
                           </div>
                        </li>

                        @endforeach
                  </div>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>




@endsection                      