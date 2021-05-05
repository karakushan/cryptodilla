@section('title') 
Popovers
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
                    <h5 class="card-title">Popovers on Top</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                    <div class="button-list">
                        <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on top
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                                    
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Popovers on Right</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                    <div class="button-list">
                        <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on right
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                                     
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Popovers on Bottom</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                    <div class="button-list">
                        <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="bottom" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on bottom
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                                    
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Popovers on Left</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                    <div class="button-list">
                        <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on left
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                                     
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Popovers Disabled</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                    <div class="button-list">
                        <span class="d-inline-block" data-toggle="popover" title="Popover Title" data-content="Disabled popover">
                          <button class="btn btn-danger" style="pointer-events: none;" type="button" disabled>Disabled button</button>
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
                    <h5 class="card-title">Popovers Dismissible</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Four options are available: top, right, bottom, and left aligned.</h6>
                    <div class="button-list">
                        <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
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

@endsection 