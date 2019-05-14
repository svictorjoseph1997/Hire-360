@extends('admin.layouts.master')


@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Projects
        <!-- <small>it all starts here</small> -->
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">All Applied Projects</h3>
        </div>
        <div class="box-body">
          
          <table width="100%" >
            <tr>
              <th>Project Name</th>
              <th>Hirer Name</th>
            </tr>
            @foreach($projects as $project)
            <tr>
              <td>{{ $project->project_title }}</td>
              <td>{{ $project->creator_name }}</td>
            </tr>
            @endforeach
          </table>


        </div>
      </div>
    </section>
  </div>
@endsection