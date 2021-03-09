@section('title') 
Flot Chart
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
                    <h5 class="card-title">Real-Time Update</h5>
                </div>
                <div class="card-body">
                    <div id="flot-real-time" class="flot-chart"></div>
                    <p style="display:none;"><input id="updateInterval" type="text" value=""></p>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Canvas Text</h5>
                </div>
                <div class="card-body">
                    <div id="flot-canvas" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Thresholds</h5>
                </div>
                <div class="card-body">
                    <div id="flot-thresholds" class="flot-chart"></div>                                
               </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Percentiles</h5>
                </div>
                <div class="card-body">
                    <div id="flot-percentiles" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Categories Chart</h5>
                </div>
                <div class="card-body">
                    <div id="flot-category" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Stacking Chart</h5>
                </div>
                <div class="card-body">
                    <div id="flot-stacking" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Series Types</h5>
                </div>
                <div class="card-body">    
                    <div id="flot-series-types" class="flot-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Error Bar</h5>
                </div>
                <div class="card-body">   
                    <div id="flot-errorbar" class="flot-chart"></div>
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
                <div class="card-body">  
                    <div id="flot-pie-chart" class="flot-chart"></div>
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
                <div class="card-body">   
                    <div id="flot-donut-chart" class="flot-chart"></div>
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
<!-- Flot Chart JS -->
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script> 
<script src="{{ asset('assets/plugins/flot-chart/jquery.colorhelpers.js') }}"></script>               
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.categories.js') }}"></script>    
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.errorbars.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.image.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.navigate.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.orderBars.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.threshold.js') }}"></script>                
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.canvas.js') }}"></script>  
<script src="{{ asset('assets/plugins/flot-chart/curvedLines.js') }}"></script>   
<script src="{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-chart-flot.js') }}"></script>
@endsection 