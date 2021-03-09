@section('title') 
Toolbar
@endsection 
@extends('layouts.main')
@section('style')
 <!-- Toolbar css -->
<link href="{{ asset('assets/plugins/toolbar/jquery.toolbar.css') }}" rel="stylesheet" type="text/css" />
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
                    <h5 class="card-title">Primary Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="primary-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-primary btn-toolbar-primary" id="primary-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>  
        <!-- End col -->  
        <!-- Start col -->                
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Secondary Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="secondary-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-secondary btn-toolbar-secondary" id="secondary-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Success Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="success-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-success btn-toolbar-success" id="success-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Danger Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="danger-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-danger btn-toolbar-danger" id="danger-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Warning Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="warning-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-warning btn-toolbar-warning" id="warning-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Info Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="info-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-info btn-toolbar-info" id="info-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Light Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="light-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-light btn-toolbar-light" id="light-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Dark Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="dark-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-dark btn-toolbar-dark" id="dark-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                 
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Top Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="top-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-primary btn-toolbar-primary" id="top-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Right Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="right-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-success btn-toolbar-success" id="right-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bottom Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="bottom-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-danger btn-toolbar-danger" id="bottom-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Left Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="left-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-warning btn-toolbar-warning" id="left-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">On Click Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="onclick-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>
                    <div data-toolbar="user-options" class="btn-toolbar btn-info btn-toolbar-info" id="onclick-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Standard Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="standard-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-primary btn-toolbar-primary" id="standard-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Flip Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="flip-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-success btn-toolbar-success" id="flip-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Grow Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="grow-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-danger btn-toolbar-danger" id="grow-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Fly in Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="flyin-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-warning btn-toolbar-warning" id="flyin-toolbar"><i class="feather icon-sliders"></i></div>                              
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bounce Toolbar</h5>
                </div>
                <div class="card-body text-center">
                    <div id="bounce-toolbar-options" class="hidden">
                        <a href="#"><i class="feather icon-wifi"></i></a>
                        <a href="#"><i class="feather icon-mic"></i></a>
                        <a href="#"><i class="feather icon-camera"></i></a>                                    
                        <a href="#"><i class="feather icon-heart"></i></a>
                        <a href="#"><i class="feather icon-search"></i></a>
                    </div>   
                    <div data-toolbar="user-options" class="btn-toolbar btn-info btn-toolbar-info" id="bounce-toolbar"><i class="feather icon-sliders"></i></div>                              
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
<!-- Toolbar js -->
<script src="{{ asset('assets/plugins/toolbar/jquery.toolbar.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-toolbar.js') }}"></script>
@endsection 