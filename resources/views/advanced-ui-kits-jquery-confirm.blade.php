@section('title') 
jQuery Confirm
@endsection 
@extends('layouts.main')
@section('style')
<!-- jQuery Confirm css -->
<link href="{{ asset('assets/plugins/jquery-confirm/css/jquery-confirm.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Simple Dialog</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="simple-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Confirm Dialog</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="confirm-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Prompt using Confirm</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="prompt-confirm-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Dialog without Button</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="btn-without-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Button keys 1</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="btn-keys-dialog">Show Demoo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Button keys 2</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="btn1-keys-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Error</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="error-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sucess</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="sucess-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Close Icon</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="close-icon-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Handle CloseIcon's Callback</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="handle-dialog">Show Demo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Draggable</h5>
                </div>
                <div class="card-body">
                    <div class="jquery-confirm">
                        <button type="button" class="btn btn-primary" id="draggable-dialog">Show Demo</button>
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
<!-- jQuery Confirm js -->
<script src="{{ asset('assets/plugins/jquery-confirm/js/jquery-confirm.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-jquery-confirm.js') }}"></script>
@endsection 