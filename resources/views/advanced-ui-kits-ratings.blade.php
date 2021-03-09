@section('title') 
Ratings
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">1/10 Rating</h5>
                </div>
                <div class="card-body">
                    <div class="rating-box-1to10">
                        <select id="rating-1to10" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7" selected="selected">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Movie Rating</h5>
                </div>
                <div class="card-body">
                    <div class="rating-box-movie">
                        <select id="rating-movie" name="rating" autocomplete="off">
                            <option value="Bad">Bad</option>
                            <option value="Mediocre">Mediocre</option>
                            <option value="Good" selected="selected">Good</option>
                            <option value="Awesome">Awesome</option>
                        </select>                                   
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Square Rating</h5>
                </div>
                <div class="card-body">
                    <div class="rating-box-square">
                        <select id="rating-square" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>                                   
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pill Rating</h5>
                </div>
                <div class="card-body">
                    <div class="rating-box-pill">
                        <select id="rating-pill" name="rating" autocomplete="off">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>                                   
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Reversed Rating</h5>
                </div>
                <div class="card-body">
                    <div class="rating-box-pill">
                        <select id="rating-reversed" name="rating" autocomplete="off">
                            <option value="Strongly Agree">Strongly Agree</option>
                            <option value="Agree">Agree</option>
                            <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
                            <option value="Disagree">Disagree</option>
                            <option value="Strongly Disagree">Strongly Disagree</option>
                        </select>                                                                      
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Horizontal Rating</h5>
                </div>
                <div class="card-body">
                    <div class="rating-box-horizontal">
                        <select id="rating-horizontal" name="rating" autocomplete="off">
                            <option value="10">10</option>
                            <option value="9">9</option>
                            <option value="8">8</option>
                            <option value="7">7</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1" selected="selected">1</option>
                        </select>                                                                      
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Font Awesome Star Rating</h5>
                </div>
                <div class="card-body">
                    <div class="stars stars-example-fontawesome">
                        <select id="rating-fontawesome" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>   
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Star Fractional Rating</h5>
                </div>
                <div class="card-body">
                    <div class="stars stars-example-fontawesome-o">
                        <select id="rating-fontawesome-o" name="rating" data-current-rating="5.6" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="title current-rating">
                        Current rating: <span class="value"></span>
                        </span>
                        <span class="title your-rating hidden">
                        Your rating: <span class="value"></span>&nbsp;
                        <a href="#" class="clear-rating"><i class="fa fa-times-circle"></i></a>
                        </span>
                    </div>   
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">CSS Star Rating</h5>
                </div>
                <div class="card-body">
                    <div class="stars stars-example-css">
                        <select id="rating-css" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>   
                </div>
            </div>    
        </div>
        <!-- End col -->
    </div>
    <!-- End row --> 
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- jQuery Bar Rating js -->
<script src="{{ asset('assets/plugins/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-barrating.js') }}"></script>
@endsection 