@extends('layouts.master')


@section('content')

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

                                    <form action="{{ url('apply_project') }}" method="POST">
                                       @csrf
                                       <li class="project-item">
                                          <div class="project-list-wrap">
                                             <h2 class="project-list-title">
                                                
                                                	<input type="text" readonly style="background-color: transparent;border: 0px solid;height: 20px;width: 160px;color: skyblue;" name="project_title" value="{{ $project->project_title}}">
                                             </h2>
                                             <div class="project-list-info">
                                                <span>{{ $project->created_at }}</span>
                                                <b><input type="text" readonly style="background-color: transparent;border: 0px solid;height: 20px;width: 160px;color: black" name="creator_name" value="{{ $project->creator_name }}"></b>
                                             </div>
                                             <div class="project-list-desc">
                                                <p>  {{ $project->project_body }}  </p>
                                             </div>
                                             <div class="project-list-skill"><span class="fre-label"><a href="#">{{ $project->skills_required }}</a></span></div>
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

@endsection