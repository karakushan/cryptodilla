@section('title') 
Piety Chart
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
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-line">5,3,9,6,5,9,7,3,5,2</span>
                    <span class="piety-line">5,3,2,-1,-3,-2,2,3,5,2</span>
                    <span class="piety-line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Updating Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-bar">5,3,9,6,5,9,7,3,5,2</span>
                    <span class="piety-bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                    <span class="piety-bar">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pie Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-pie">1/5</span>
                    <span class="piety-pie">226/360</span>
                    <span class="piety-pie">0.52/1.561</span>
                    <span class="piety-pie">1,4</span>
                    <span class="piety-pie">226,134</span>
                    <span class="piety-pie">0.52,1.041</span>
                    <span class="piety-pie">1,2,3,2,2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Donut Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <span class="piety-donut">1/5</span>
                    <span class="piety-donut">226/360</span>
                    <span class="piety-donut">0.52/1.561</span>
                    <span class="piety-donut">1,4</span>
                    <span class="piety-donut">226,134</span>
                    <span class="piety-donut">0.52,1.041</span>
                    <span class="piety-donut">1,2,3,2,2</span>
                </div>
            </div>
        </div>    
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Data Attributes Chart</h5>
                </div>
                <div class="card-body text-center">                                
                    <p class="piety-data-attributes mb-0">
                      <span data-peity='{ "fill": ["#0080ff", "#e9eff9"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                      <span data-peity='{ "fill": ["#ffe411", "#e9eff9"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                      <span data-peity='{ "fill": ["#08d26f", "#e9eff9"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                      <span data-peity='{ "fill": ["#fc4f68", "#e9eff9"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                      <span data-peity='{ "fill": ["#81cef6", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                      <span data-peity='{ "fill": ["#bcc4dc", "#e9eff9"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                      <span data-peity='{ "fill": ["#2e2e2e", "#e9eff9"], "innerRadius": 15, "radius": 16 }'>7/7</span>
                    </p>
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
<!-- Piety Chart js -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('assets/js/custom/custom-chart-piety.js') }}"></script>
@endsection 