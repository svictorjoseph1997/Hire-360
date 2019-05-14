@extends('layouts.master')


@section('content')<div class="fre-page-wrapper">
   <div class="fre-page-title">
      <div class="container">
         <h2>Feedback</h2>
      </div>
   </div>
    	<script type="text/javascript">
         var ReviewNumber;
      		function myFunction(number){
               ReviewNumber=number;
                for(var i=0;i<5;i++){
                  var idName= "s"+(i+1);
                    document.getElementById(idName).classList.remove('fa-star');
                     document.getElementById(idName).classList.add('fa-star-o');
                }

               for(var i=0;i<number;i++){
                  var idName= "s"+(i+1);
                  document.getElementById(idName).classList.remove('fa-star-o');
               document.getElementById(idName).classList.add('fa-star');

               }
         document.getElementById('rate').value = ReviewNumber;
      		}
      </script>
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
                           <form action="/submit_feedback" method="POST">
                              @csrf
                              <div class="row">
                                 <select style="width: 230px;height: 45px;font-size: 22px;" name="name">
                                    @foreach ($hirelings as $hireling)
                                    <option>{{ $hireling->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <br>
                              <div><b><h4>Rating<h4><b></div>
                                 <input type="text" style="display: none;" id="rate" name="rate" value="">
                              <div>
                              <div class="free-rating rate-it" data-score="3" title="good">
                              <i onclick="myFunction(1)" id="s1" data-alt="1" class="fa fa-star-o fa-lg star-on-png review-star" title="bad"></i>&nbsp;
                                 <i onclick="myFunction(2)" id="s2" data-alt="2" class="fa  fa-lg fa-star-o star-on-png review-star" title="below average"></i>&nbsp;
                                 <i onclick="myFunction(3)" id="s3" data-alt="3" class="fa fa-lg fa-star-o star-on-png review-star" title="average"></i>&nbsp;
                                 <i onclick="myFunction(4)" id="s4" data-alt="4" class="fa fa-lg fa-star-o star-on-png review-star" title="good"></i>&nbsp;
                                 <i onclick="myFunction(5)" id="s5" data-alt="5" class="fa fa-lg fa-star-o star-on-png review-star" title="very good"></i><input name="score" type="hidden" value="3" readonly=""></div>
                              </div>
                              <br>
                              <div><b><h4>Leave a Review<h4><b></div>
                              <div><textarea name="review" rows="10" cols="134"></textarea>
                                 <div>
                                    <input type="submit" value="Submit Form">
                                 </div>
                           </form>
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