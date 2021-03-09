@section('title') 
Range Slider
@endsection 
@extends('layouts.main')
@section('style')
<!-- Range Slider css -->
<link href="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
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
                    <h5 class="card-title">Basic</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Start without params</h6>
                    <input id="range-slider-basic">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Min and Max</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Set min value, max value and start point</h6>
                    <input id="range-slider-min-max">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Prefix</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Set type to double and specify range, also showing grid and adding prefix "$"</h6>
                    <input id="range-slider-prefix">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Range</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Set up range with negative values</h6>
                    <input id="range-slider-range">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Step</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using step 250</h6>
                    <input id="range-slider-step">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Fractional Step</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Set up range with fractional values, using fractional step</h6>
                    <input id="range-slider-fractional-step">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Own Numbers</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Set up you own numbers</h6>
                    <input id="range-slider-own-numbers">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">String Value</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using any strings as your values</h6>
                    <input id="range-slider-string-value">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">No Prettify</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Big numbers are ugly and unreadable</h6>
                    <input id="range-slider-no-prettify">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Prettify</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Prettify enabled. Much better!</h6>
                    <input id="range-slider-prettify">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Seperator</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Don't like space as separator? Use anything you like!</h6>
                    <input id="range-slider-seperator">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Own Prettify Function</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">You don't like default prettify function? Use your own!</h6>
                    <input id="range-slider-own-prettify-function">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Postfixes</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using postfixes</h6>
                    <input id="range-slider-postfixes">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Max Postfixes</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Want to show that max number is not the biggest one?</h6>
                    <input id="range-slider-max-postfixes">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Both Decoration</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Want to show that max number is not the biggest one?</h6>
                    <input id="range-slider-both-decoration">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Remove Decoration</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Remove double decoration</h6>
                    <input id="range-slider-remove-decoration">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Own Values Separator</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use your own separator symbol with values_separator option. Like →</h6>
                    <input id="range-slider-own-value-separator">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Values Separator To</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Or " to ":</h6>
                    <input id="range-slider-value-separator-to">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Hide Visual Details</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">You can disable all the sliders visual details, if you wish. Like this:</h6>
                    <input id="range-slider-hide-visual-details">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Hide any Details</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Or hide any part you wish</h6>
                    <input id="range-slider-hide-any-detail">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Hide From-To Details</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">And some more</h6>
                    <input id="range-slider-hide-from-to-details">    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Hide Min-Max & Grid Details</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">And some more</h6>
                    <input id="range-slider-hide-min-max-grid-details">    
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
<!-- Range Slider js -->
<script src="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-range-slider.js') }}"></script>
@endsection 