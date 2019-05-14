@extends('layouts.master')


@section('content')

<div class="fre-page-wrapper">
               <div class="fre-page-title">
                  <div class="container">
                     <h2>Applied Projects</h2>
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
                                       <h3>Ongoing Projects</h3>
										<table width="100%" >
											<tr>
												<th>Project Name</th>
												<th>Hirer Name</th>
											</tr>
											@foreach($projects as $project)
											<tr>
												<td><a href="/view_projectt/{{ $project->project_title }}">{{ $project->project_title }}</a></td>
												<td><a href="/view_projectt/{{ $project->project_title }}">{{ $project->creator_name }}</a></td>
											</tr>
											@endforeach
										</table>
                                    </div>
                              </div>
                           </div>
                           </div>

                           <div class="fre-project-list-box">
                              <div class="fre-project-list-wrap">
                                 <div class="fre-project-result-sort">
                                    <div class="row">
                                       <h3>Completed Projects</h3>
                              <table width="100%" >
                                 <tr>
                                    <th>Project Name</th>
                                    <th>Hirer Name</th>
                                 </tr>
                                 @foreach($c_projects as $project)
                                 <tr>
                                    <td><a href="/view_projectt/{{ $project->project_title }}">{{ $project->project_title }}</a></td>
                                    <td><a href="/view_projectt/{{ $project->project_title }}">{{ $project->creator_name }}</a></td>
                                 </tr>
                                 @endforeach
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












@endsection