@section('title') 
eCommerce
@endsection 
@extends('layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- jvectormap css -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">              
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Sales by Category</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetCategory">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                             <div id="apex-pie-chart" class="my-4"></div>
                        </div>
                        <div class="card-footer py-3 text-center">
                            <div class="row">
                                <div class="col-6 border-right">
                                    <p class="mb-1">Total Sale</p>
                                    <h4 class="mb-0">250</h4>
                                </div>
                                <div class="col-6">
                                    <p class="mb-1">Total Profit</p>
                                    <h4 class="mb-0">$495</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h5 class="card-title mb-0">Average <br/>Revenue</h5>
                                </div>
                                <div class="col-7 text-right">
                                    <h4 class="mb-0">$2075 <span class="badge badge-secondary-inverse font-14 v-a-m">+23</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->                        
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-8">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Quick Summary</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetSummary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetSummary">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="revenue-box border-bottom mb-2">
                                        <h4>$1598</h4>
                                        <p>Total Earning <a href="#">Withdraw</a></p>
                                    </div>
                                    <div class="revenue-box">
                                        <h4>$1285</h4>
                                        <p>To be Paid <a href="#">Pay</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div id="apex-stacked-bar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">Storage</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="widgetStorage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetStorage">
                                            <a class="dropdown-item font-13" href="#">Refresh</a>
                                            <a class="dropdown-item font-13" href="#">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-xl-7">
                                    <p><i class="feather icon-arrow-up text-primary mr-1"></i>Used: <strong>17.2 GB</strong></p>
                                    <p><i class="feather icon-arrow-down mr-1"></i>Free: <strong>7.8 GB</strong></p>
                                </div>
                                <div class="col-lg-6 col-xl-5 text-center">                                                
                                    <img src="assets/images/ecommerce/storage.png" class="img-fluid" alt="storage">
                                    <p class="storage-num">25 GB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Best Selling Product</h5>
                        </div>
                        <div class="card-body">
                            <div class="best-product-slider">
                                <div class="best-product-slider-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="assets/images/ecommerce/produc_slider_01.png" class="img-fluid" alt="product">
                                        </div>
                                        <div class="col-8">
                                            <span class="font-12 text-uppercase">Sports</span>
                                            <h5 class="mt-2 mb-4 font-16">Black Shoes</h5>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item pr-2 border-right">
                                                    <h4 class="mb-0">205</h4>
                                                    <p class="mb-0">Sold</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h4 class="mb-0">52</h4>
                                                    <p class="mb-0">In Stock</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="best-product-slider-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="assets/images/ecommerce/produc_slider_02.png" class="img-fluid" alt="product">
                                        </div>
                                        <div class="col-8">
                                            <span class="font-12 text-uppercase">Fashion</span>
                                            <h5 class="mt-2 mb-4 font-16">Red Lipstic</h5>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item pr-3 border-right">
                                                    <h4 class="mb-0">121</h4>
                                                    <p class="mb-0">Sold</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h4 class="mb-0">35</h4>
                                                    <p class="mb-0">In Stock</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="best-product-slider-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="assets/images/ecommerce/produc_slider_03.png" class="img-fluid" alt="product">
                                        </div>
                                        <div class="col-8">
                                            <span class="font-12 text-uppercase">New</span>
                                            <h5 class="mt-2 mb-4 font-16">Hyper Car</h5>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item pr-3 border-right">
                                                    <h4 class="mb-0">55</h4>
                                                    <p class="mb-0">Sold</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h4 class="mb-0">31</h4>
                                                    <p class="mb-0">In Stock</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End col --> 
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-6">
                    <div class="card text-center m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Orders</h5>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="dash-analytic-icon"><i class="feather icon-shopping-bag success-rgba text-success"></i></p>
                            <h4 class="mb-3">79</h4>
                            <p>60% Target</p>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-6">
                    <div class="card text-center m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Users</h5>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <p class="dash-analytic-icon"><i class="feather icon-users primary-rgba text-primary"></i></p>
                            <h4 class="mb-3">125</h4>
                            <p>80% Target</p>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Revenue Stastics</h5>
                        </div>
                        <div class="card-body p-0">                                        
                            <ul class="list-inline p-3 mb-0">
                                <li class="list-inline-item">
                                    <h4 class="mb-0">$12,398</h4>
                                </li>
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-secondary-rgba font-12 mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Today</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Yesterday</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                    </div>
                                </li>
                            </ul>
                            <div id="apex-area-chart"></div>
                            <p class="ecom-chart-btn"><span>7% Increase</span></p>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-8">
            <div class="card m-b-30 dash-widget">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h5 class="card-title mb-0">Map</h5>
                        </div>
                        <div class="col-8">
                            <ul class="nav nav-pills float-right" id="pills-location-tab-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-sales-tab-justified" data-toggle="pill" href="#pills-sales-justified" role="tab" aria-selected="true">Abroad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-clients-tab-justified" data-toggle="pill" href="#pills-clients-justified" role="tab" aria-selected="false">Local</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div id="world-map" class="vector-world-map"></div> 
                        </div>
                        <div class="col-lg-3">
                            <p>USA <span class="float-right">75%</span></p>
                            <div class="progress mb-4" style="height: 5px;">
                              <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Russia <span class="float-right">60%</span></p>
                            <div class="progress mb-4" style="height: 5px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Australia <span class="float-right">35%</span></p>
                            <div class="progress mb-4" style="height: 5px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>Argentina <span class="float-right">25%</span></p>
                            <div class="progress mb-4" style="height: 5px;">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>India <span class="float-right">50%</span></p>
                            <div class="progress mb-1" style="height: 5px;">
                              <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
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
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- Vector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/js/custom/custom-dashboard-ecommerce.js') }}"></script>
@endsection 