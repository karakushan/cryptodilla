@section('title') 
Pnotify
@endsection 
@extends('layouts.main')
@section('style')
<!-- Pnotify css -->
<link href="{{ asset('assets/plugins/pnotify/css/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
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
                    <h5 class="card-title">Primary</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-primary"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Success</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-success" id="pnotify-success"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Danger</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-danger" id="pnotify-danger"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Info</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-info" id="pnotify-info"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Desktop Primary</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-desktop-primary"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Desktop Success</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-success" id="pnotify-desktop-success"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Desktop Danger</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-danger" id="pnotify-desktop-danger"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Desktop Info</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-info" id="pnotify-desktop-info"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Desktop Warning</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-warning" id="pnotify-desktop-warning"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
    </div>
    <!-- End row --> 
    <!-- Start row --> 
    <div class="row">                    
        <!-- Start col -->
        <div class="col-md-12 col-lg-12">
            <h5 class="card-title font-18">Options</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Translucent</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-translucent"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">No Shadow Notice</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-no-shadow-notice"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Simple</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-simple"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Number</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-number"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">No Mouse Reset</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-no-mouse-reset"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Fast Fading</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-fast-fading"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">No Effect</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-no-effect"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Forms</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-forms"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Click on it</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-click-on-it"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Click to close</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-click-to-close"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Huge</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-huge"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Rich Text</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-rich-text"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Keep it safe</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-keep-it-safe"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Dynamic</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-dynamic"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Styles</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-custom-styles"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
    </div>
    <!-- End row --> 
    <!-- Start row --> 
    <div class="row">                    
        <!-- Start col -->
        <div class="col-md-12 col-lg-12">
            <h5 class="card-title font-18">Confirm Module</h5> 
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Confirm Dialog</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-confirm-dialog"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Modal Confirm Dialog</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-modal-confirm-dialog"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Button</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-custom-button"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Alert Style Button</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-alert-style-button"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Prompt Dialog</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-prompt-dialog"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Multi Line Prompt Dialog</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-multi-line-prompt-dialog"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12">
            <h5 class="card-title font-18">Callback Module</h5> 
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Notice with Callback</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-notice-with-callback"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Notice to Error to Success to Info</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-notice-to-error-to-success-to-info"><i class="feather icon-bell"></i> Click here!</button>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Progress Loader</h5>
                </div>
                <div class="card-body">
                    <div class="pnotify">
                        <button type="button" class="btn btn-primary" id="pnotify-progress-loader"><i class="feather icon-bell"></i> Click here!</button>
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
<!-- Pnotify js -->
<script src="{{ asset('assets/plugins/pnotify/js/pnotify.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-pnotify.js') }}"></script>
@endsection 