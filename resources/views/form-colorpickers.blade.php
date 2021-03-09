@section('title') 
Form Color Picker
@endsection 
@extends('layouts.main')
@section('style')
<!-- Color Picker css -->
<link href="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css">
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- End col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Color Picker</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Most simple example, with any options or color information.</h6>
                    <input id="default-color" type="text" class="form-control input-lg" value="#0080ff"/>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">RGB Color Picker</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Most simple example, with any options or color information.</h6>
                    <input id="rgb-color" type="text" class="form-control input-lg" value="#0080ff"/>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Initial color</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                    <div id="initial-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="#0080ff"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Initial RGB Color</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                    <div id="initial-rgb-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="#0080ff"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Horizontal Mode</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">In this mode the hue and alpha bars are horizontal instead of vertical.</h6>
                    <div id="horizontal-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="#0080ff"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Transparent</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Example showing the <code>transparent</code> named color support.</h6>
                    <div id="transparent-color" class="input-group" title="Using input value">
                      <input type="text" class="form-control input-lg" value="transparent"/>
                      <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
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
<!-- Color Picker js -->
<script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-colorpicker.js') }}"></script>
@endsection 