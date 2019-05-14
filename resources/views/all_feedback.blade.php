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


<div class="fre-perfect-freelancer">
    <div class="container">
@foreach($feedbacks as $feedback)
        <div class="row">
            <div class="col-lg-10 col-md-12">
                <div class="fre-freelancer-wrap">
                    
                    <h2>
                        <a href="https://freelanceengine.enginethemes.com/author/ducnguyen/">{{ $feedback->name }}</a>
                    </h2>
                    <p class="secondary-color">Reviewd At: {{ $feedback->created_at }}</p>
                    <div class="free-rating rate-it" data-score="4.833333333333333"></div>
                    <div class="free-hourly-rate">
                        <span>Rate_Score: {{ $feedback->rate }}</span>                       
                    </div>
                    {{ $feedback->review }}
                    <br>
                    <br>

                        <span>Reviewed by: {{ $feedback->review_by }}</span>                       


                </div>
            </div>

        </div>
@endforeach
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