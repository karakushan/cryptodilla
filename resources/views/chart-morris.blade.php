@section('title') 
Morris Chart
@endsection 
@extends('layouts.main')
@section('style')
<!-- Morris Chart css -->
<link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
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
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>              
                    <div id="morris-line" class="morris-chart"></div>            
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
                <div class="card-body">     
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>         
                    <div id="morris-updating" class="morris-chart"></div>            
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
                <div class="card-body"> 
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>            
                    <div id="morris-bar" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Stacked Bar Chart</h5>
                </div>
                <div class="card-body">  
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>            
                    <div id="morris-stacked-bar" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End col -->                    
        <!-- Start col -->                           
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Area Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>      
                    <div id="morris-area" class="morris-chart"></div>            
                </div>
            </div>
        </div> 
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Area Chart without Point & Line</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>           
                    <div id="morris-area-without-line-point" class="morris-chart"></div>            
                </div>
            </div>
        </div>
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Area Chart without Smooth</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>          
                    <div id="morris-area-without-smooth" class="morris-chart"></div>            
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
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>               
                    <div id="morris-donut" class="morris-chart"></div>            
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
<!-- Morris Chart js -->
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-chart-morris.js') }}"></script>
@endsection 