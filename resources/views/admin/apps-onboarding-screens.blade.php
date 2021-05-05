@section('title') 
Onboarding Screen
@endsection 
@extends('layouts.main')
@section('style')
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row justify-content-center">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Onboarding Screens</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="onboard-content text-center my-5">
                                <img src="assets/images/ui-onboard/unboard.svg" class="img-fluid mb-5" alt="onboard">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#onboardingScreens">Click to Start !!!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="onboardingScreens" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent border-0">
                            <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body border-0">
                            <div id="onboard-screen" class="onboard-screen">
                                <div class="onboard-screen-list">
                                    <img src="assets/images/ui-onboard/responsive.svg" class="img-fluid" alt="onboard">
                                    <h5 class="card-title my-4">Highly Responsive</h5>
                                    <p class="text-muted">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="onboard-screen-list">
                                    <img src="assets/images/ui-onboard/customisable.svg" class="img-fluid" alt="onboard">
                                    <h5 class="card-title my-4">Customisable</h5>
                                    <p class="text-muted">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="onboard-screen-list">
                                    <img src="assets/images/ui-onboard/easily-editable-code.svg" class="img-fluid" alt="onboard">
                                    <h5 class="card-title my-4">Easily Editable Code</h5>
                                    <p class="text-muted">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="onboard-screen-list">
                                    <img src="assets/images/ui-onboard/unique-widgets.svg" class="img-fluid" alt="onboard">
                                    <h5 class="card-title my-4">Unique Widgets</h5>
                                    <p class="text-muted">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
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
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Onboarding Screens js -->
<script src="{{ asset('assets/js/custom/custom-onboarding-screens.js') }}"></script>
@endsection 