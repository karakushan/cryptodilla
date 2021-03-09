@section('title') 
Form Max Length
@endsection 
@extends('layouts.main')
@section('style')

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
                    <h5 class="card-title">Default Usage</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">The badge will show up by default when the remaining chars are 25 or less:</h6>
                    <input type="text" class="form-control" maxlength="25" name="maxlength-default" id="maxlength-default" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Threshold Value</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:</h6>
                    <input type="text" class="form-control" maxlength="25" name="maxlength-threshold" id="maxlength-threshold" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">All the Options</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">This is a complete example where all the options configured for the bootstrap-maxlength counter are setted.</h6>
                    <input type="text" class="form-control" maxlength="25" name="maxlength-all-options" id="maxlength-all-options" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Positions</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">All you need to do is specify the placement option, with one of those strings. If none is specified, the positioning will be defauted to 'bottom'.</h6>
                    <input type="text" class="form-control" maxlength="25" name="maxlength-positions" id="maxlength-positions" placeholder="Enter text">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Textarea</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Bootstrap maxlength supports textarea as well as inputs.</h6>
                    <textarea class="form-control" maxlength="225" rows="3" name="maxlength-textarea" id="maxlength-textarea" placeholder="This textarea has a limit of 225 chars."></textarea>
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
<!-- MaxLength js -->
<script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-maxlength.js') }}"></script>
@endsection 