@section('title') 
Toasts
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
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Simple</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" id="simple-toasts-btn">Show Demo</button>
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 30px; right: 30px;" id="simple-toasts">
                            <div class="toast-header">
                                <i class="feather icon-alert-triangle text-danger mr-2"></i>  
                                <span class="toast-title mr-auto">Bootstrap</span>
                                <small>11 mins ago</small>
                            </div>
                            <div class="toast-body">
                            Hello, world! This is a toast message.
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
                <div class="card-header">
                    <h5 class="card-title">Top Right</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" id="top-right-toasts-btn">Show Demo</button>
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 30px; right: 30px;" id="top-right-toasts">
                            <div class="toast-header">
                                <i class="feather icon-alert-triangle text-danger mr-2"></i>  
                                <span class="toast-title mr-auto">Bootstrap</span>
                                <small>11 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                            Hello, world! This is a toast message.
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
                <div class="card-header">
                    <h5 class="card-title">Bottom Right</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" id="bottom-right-toasts-btn">Show Demo</button>
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; bottom: 30px; right: 30px;" id="bottom-right-toasts">
                            <div class="toast-header">
                                <i class="feather icon-alert-triangle text-danger mr-2"></i>  
                                <span class="toast-title mr-auto">Bootstrap</span>
                                <small>11 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                            Hello, world! This is a toast message.
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
                <div class="card-header">
                    <h5 class="card-title">Bottom Left</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" id="bottom-left-toasts-btn">Show Demo</button>
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; bottom: 30px; left: 30px; z-index:999;" id="bottom-left-toasts">
                            <div class="toast-header">
                                <i class="feather icon-alert-triangle text-danger mr-2"></i>  
                                <span class="toast-title mr-auto">Bootstrap</span>
                                <small>11 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                            Hello, world! This is a toast message.
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
                <div class="card-header">
                    <h5 class="card-title">Top Left</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" id="top-left-toasts-btn">Show Demo</button>
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 30px; left: 30px; z-index:999;" id="top-left-toasts">
                        <div class="toast-header">
                            <i class="feather icon-alert-triangle text-danger mr-2"></i>  
                            <span class="toast-title mr-auto">Bootstrap</span>
                            <small>11 mins ago</small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                        Hello, world! This is a toast message.
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
                <div class="card-header">
                    <h5 class="card-title">Centered</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" id="center-toasts-btn">Show Demo</button>
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; left: 0; right: 0; margin: 0 auto; top: 45%; bottom: auto; z-index:999;" id="center-toasts">
                            <div class="toast-header">
                                <i class="feather icon-alert-triangle text-danger mr-2"></i>  
                                <span class="toast-title mr-auto">Bootstrap</span>
                                <small>11 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                            Hello, world! This is a toast message.
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
<!-- Toasts js -->
<script src="{{ asset('assets/js/custom/custom-toasts.js') }}"></script>
@endsection 