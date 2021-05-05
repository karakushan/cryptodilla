@section('title') 
Widgets
@endsection 
@extends('layouts.main')
@section('style')
<!-- apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
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
        <div class="col-lg-4 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                        <div class="media-body">
                            <p class="mb-0">Projects</p>
                            <h5 class="mb-0">85</h5>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-clipboard"></i></span>
                        <div class="media-body">
                            <p class="mb-0">Tasks</p>
                            <h5 class="mb-0">259</h5>                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-users"></i></span>
                        <div class="media-body">
                            <p class="mb-0">Teams</p>
                            <h5 class="mb-0">57</h5>                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Issues</h5>
                </div>
                <div class="card-body">
                    <div id="apex-pie-chart"></div>
                    <div class="row">
                        <div class="col-6 text-right">
                            <p class="mb-1">Open<i class="mdi mdi-circle text-primary ml-2"></i></p>
                            <h5 class="mb-0">105</h5>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><i class="mdi mdi-circle text-light mr-2"></i>Close</p>
                            <h5 class="mb-0">45</h5>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <p class="my-2"><span class="font-18 f-w-6 text-primary">75%</span></p>
                        </div>
                        <div class="col-6">
                            <p class="my-2">See All</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Progress</h5>
                </div>
                <div class="card-body">
                    <h5 class="mb-4">Project Think Tank</h5>
                    <p>Prototyping <span class="float-right">75%</span></p>
                    <div class="progress mb-4" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Designing <span class="float-right">30%</span></p>
                    <div class="progress mb-4" style="height: 4px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Development <span class="float-right">50%</span></p>
                    <div class="progress mb-1" style="height: 4px;">
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>                                        
                </div>
                <div class="card-footer">
                    <span class="mr-3">Teams : </span>
                    <div class="avatar-group">
                        <div class="avatar">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                            </a>
                        </div>
                        <div class="avatar">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                    <span class="float-right mt-2"><i class="feather icon-paperclip mr-1"></i>5</span>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-body text-center">
                    <div class="user-slider">
                        <div class="user-slider-item">
                            <img src="assets/images/users/boy.svg" alt="avatar" width="100" class="rounded-circle mt-3 mb-4">
                            <h5>James Smith</h5>
                            <p>Senior Sales Executive</p>
                            <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                        </div>
                        <div class="user-slider-item">
                            <img src="assets/images/users/boy.svg" alt="avatar" width="100" class="rounded-circle mt-3 mb-4">
                            <h5>James Smith</h5>
                            <p>Senior Sales Executive</p>
                            <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                        </div>
                        <div class="user-slider-item">
                            <img src="assets/images/users/boy.svg" alt="avatar" width="100" class="rounded-circle mt-3 mb-4">
                            <h5>James Smith</h5>
                            <p>Senior Sales Executive</p>
                            <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                        </div>
                    </div>                                        
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <p class="my-2">Follow</p>
                        </div>
                        <div class="col-6">
                            <p class="my-2">Message</p>
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
                                <button class="btn btn-link l-h-20 p-0 font-18 float-right" type="button" id="CustomdropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="CustomdropdownMenuButton8">
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
                                <div class="col-sm-4">
                                    <img src="assets/images/ecommerce/produc_slider_01.png" class="img-fluid" alt="product">
                                </div>
                                <div class="col-sm-8">
                                    <span class="font-12 text-uppercase">Nike</span>
                                    <h5 class="mt-2 mb-4 font-16">Sports Shoes</h5>
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
                                <div class="col-sm-4">
                                    <img src="assets/images/ecommerce/produc_slider_02.png" class="img-fluid" alt="product">
                                </div>
                                <div class="col-sm-8">
                                    <span class="font-12 text-uppercase">Nike</span>
                                    <h5 class="mt-2 mb-4 font-16">Sports Shoes</h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-3 border-right">
                                            <h4 class="mb-0">205</h4>
                                            <p class="mb-0">Units Sold</p>
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
                                <div class="col-sm-4">
                                    <img src="assets/images/ecommerce/produc_slider_03.png" class="img-fluid" alt="product">
                                </div>
                                <div class="col-sm-8">
                                    <span class="font-12 text-uppercase">Nike</span>
                                    <h5 class="mt-2 mb-4 font-16">Sports Shoes</h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-3 border-right">
                                            <h4 class="mb-0">205</h4>
                                            <p class="mb-0">Units Sold</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <h4 class="mb-0">52</h4>
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
        <!-- Start col -->
        <div class="col-lg-4">
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
        <!-- Start col -->
        <div class="col-lg-4">
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
        <div class="col-lg-4">
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
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/crypto/bitcoin.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mb-2">Bitcoin</h5> 
                            <p class="mb-0">1 BTC = 49 USD</p>                                                             
                        </div>
                        <img class="action-bg rounded-circle" src="assets/images/crypto/1.png" alt="Generic placeholder image">
                    </div>
                </div>
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/crypto/ethereum.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mb-2">Ethereum</h5> 
                            <p class="mb-0">1 ETC = 5.69 USD</p>                                                             
                        </div>
                        <img class="action-bg rounded-circle" src="assets/images/crypto/2.png" alt="Generic placeholder image">
                    </div>
                </div>
            </div>            
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/crypto/ripple.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mb-2">Ripple</h5> 
                            <p class="mb-0">1 RPC = 0.96 USD</p>                                                             
                        </div>
                        <img class="action-bg rounded-circle" src="assets/images/crypto/3.png" alt="Generic placeholder image">
                    </div>
                </div>
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="assets/images/crypto/bcc.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mb-2">Bitcoin Cash</h5> 
                            <p class="mb-0">1 BCC = 58.85 USD</p>                                                             
                        </div>
                        <img class="action-bg rounded-circle" src="assets/images/crypto/4.png" alt="Generic placeholder image">
                    </div>
                </div>
            </div>            
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-user"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Students</h5>
                            <h4 class="mb-0">2585</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <span class="font-13">Updated Today</span>
                        </div>
                        <div class="col-4 text-right">
                            <span class="badge badge-success"><i class="feather icon-trending-up mr-1"></i>25%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-success-inverse mr-0"><i class="feather icon-award"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Teachers</h5>
                            <h4 class="mb-0">263</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <span class="font-13">Updated 1 Day ago</span>
                        </div>
                        <div class="col-4 text-right">
                            <span class="badge badge-warning"><i class="feather icon-trending-down mr-1"></i>23%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-warning-inverse mr-0"><i class="feather icon-briefcase"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Staffs</h5>
                            <h4 class="mb-0">45</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <span class="font-13">Updated 3 Day ago</span>
                        </div>
                        <div class="col-4 text-right">
                            <span class="badge badge-success"><i class="feather icon-trending-up mr-1"></i>15%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-secondary-inverse mr-0"><i class="feather icon-book-open"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Course</h5>
                            <h4 class="mb-0">93</h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <span class="font-13">Updated 5 Day ago</span>
                        </div>
                        <div class="col-4 text-right">
                            <span class="badge badge-warning"><i class="feather icon-trending-down mr-1"></i>10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30 quote-bg">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-2">
                            <span class=""><i class="mdi mdi-format-quote-open text-black font-20"></i></span>
                        </div>
                        <div class="col-10">
                            <h5 class="card-title mb-0 text-right">Quote of the Day</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <img src="assets/images/general/school_quote.svg" class="img-fluid my-3" width="150" alt="school quote">
                    <h5 class="text-primary font-italic my-3">Be the change, You wish<br/> to see in the World.</h5>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Course</h5>
                </div>
                <div class="card-body text-center">
                    <div class="course-slider">
                        <div class="course-slider-item">
                            <h4 class="my-0">Mathematics</h4>
                            <div class="row align-items-center my-4 py-3">
                                <div class="col-4 p-0">
                                    <h4>24</h4>
                                    <p class="mb-0">Faculty</p>
                                </div>
                                <div class="col-4 py-3 px-0 bg-primary-rgba rounded">
                                    <h4 class="text-primary">543</h4>
                                    <p class="text-primary mb-0">Students</p>
                                </div>
                                <div class="col-4 p-0">
                                    <h4>09</h4>
                                    <p class="mb-0">Class</p>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-left">
                                    <span class="font-13">80% Completed</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="font-13">19/25 Module</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-slider-item">
                            <h4 class="my-0">Science</h4>
                            <div class="row align-items-center my-4 py-3">
                                <div class="col-4 p-0">
                                    <h4>22</h4>
                                    <p class="mb-0">Faculty</p>
                                </div>
                                <div class="col-4 py-3 px-0 bg-success-rgba rounded">
                                    <h4 class="text-success">350</h4>
                                    <p class="text-success mb-0">Students</p>
                                </div>
                                <div class="col-4 p-0">
                                    <h4>05</h4>
                                    <p class="mb-0">Class</p>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-left">
                                    <span class="font-13">70% Completed</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="font-13">17/25 Module</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-slider-item">
                            <h4 class="my-0">English</h4>
                            <div class="row align-items-center my-4 py-3">
                                <div class="col-4 p-0">
                                    <h4>18</h4>
                                    <p class="mb-0">Faculty</p>
                                </div>
                                <div class="col-4 py-3 px-0 bg-secondary-rgba rounded">
                                    <h4 class="text-secondary">470</h4>
                                    <p class="text-secondary mb-0">Students</p>
                                </div>
                                <div class="col-4 p-0">
                                    <h4>15</h4>
                                    <p class="mb-0">Class</p>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-left">
                                    <span class="font-13">60% Completed</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="font-13">15/25 Module</span>
                                </div>
                            </div>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Parents Feedback</h5>
                </div>
                <div class="card-body">
                    <div class="parents-slider">
                        <div class="parents-slider-item">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4">
                                    <img src="assets/images/general/parent_01.png" class="img-fluid" alt="parent">
                                </div>
                                <div class="col-12 col-md-8">
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <h5 class="card-title mb-1">Ms. Jessica Matthew</h5>
                                    <p class="mb-0 font-14 font-italic">Mother of Larry Matthew, Class 6</p>
                                </div>
                            </div>
                        </div>
                        <div class="parents-slider-item">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4">
                                    <img src="assets/images/general/parent_02.png" class="img-fluid" alt="parent">
                                </div>
                                <div class="col-12 col-md-8">
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <h5 class="card-title mb-1">Ms. John Doe</h5>
                                    <p class="mb-0 font-14 font-italic">Father of Mila Doe, Class 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="parents-slider-item">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4">
                                    <img src="assets/images/general/parent_03.png" class="img-fluid" alt="parent">
                                </div>
                                <div class="col-12 col-md-8">
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <h5 class="card-title mb-1">Ms. Maria Andrew</h5>
                                    <p class="mb-0 font-14 font-italic">Mother of Will Andrew, Class 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Appointments</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetAppointment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetAppointment">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body appointment-widget">
                    <h3>235</h3>
                    <p>Total This Week</p>
                    <ul class="list-unstyled py-3">
                        <li><i class="mdi mdi-circle text-primary mr-2"></i> Website</li>
                        <li><i class="mdi mdi-circle text-success mr-2"></i> Phone Call</li>
                        <li><i class="mdi mdi-circle text-light mr-2"></i> App</li>
                    </ul>
                    <div class="row align-items-end">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary">Export Report <i class="feather icon-file ml-2"></i></button>
                        </div>
                        <div class="col-6">
                            <p class="bg-icon"><i class="feather icon-calendar"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h5 class="card-title mb-0">Recent Activity</h5>
                        </div>
                        <div class="col-5">
                            <button class="btn btn-secondary-rgba float-right font-13">View All</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="activities-history">
                        <div class="activities-history-list">
                            <div class="activities-history-item">                                            
                                <h6>Finished prototyping Project X.</h6>
                                <p class="mb-0">Just Now</p>
                            </div>
                        </div>
                        <div class="activities-history-list">
                            <div class="activities-history-item">
                                <h6>Received confirmation from marketing manager.</h6>
                                <p class="mb-0">11:00 AM - 3 Oct, 2019</p>
                            </div>
                        </div>
                        <div class="activities-history-list">
                            <div class="activities-history-item">
                                <h6>Zoe Updated quick start guide for development process.</h6>
                                <p class="mb-0">09:25 PM - 27 Sep, 2019</p>
                            </div>
                        </div>
                        <div class="activities-history-list">
                            <div class="activities-history-item">
                                <h6>Nobita has applied for leave on Easter days.</h6>
                                <p class="mb-0">06:45 PM - 15 Mar, 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                      
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">To do Lists</h5>
                </div>
                <div class="card-body">
                    <div class="to-do-list">
                        <ul id="list-group" class="list-group list-group-flush"></ul>
                        <form class="add-items">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                <div class="input-group-append">
                                    <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                                </div>
                            </div>
                        </form>
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
<!-- To Do List js -->
<script src="{{ asset('assets/js/custom/custom-to-do-list.js') }}"></script>
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Chart js -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-widgets.js') }}"></script>
@endsection 