@section('title') 
Sparkline Chart
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
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-line"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Area Line Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-area-line"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pie Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-pie"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-bar"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Composite Bar Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-composite-bar"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Tristate Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-tristate"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Discrete Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-discrete"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bullet Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-bullet"></div>
                </div>
            </div>
        </div>    
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Box Plot Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <div id="sparkline-box-plot"></div>
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
<!-- Sparkline Chart JS -->
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script> 
<script src="{{ asset('assets/js/custom/custom-chart-sparkline.js') }}"></script>
@endsection 