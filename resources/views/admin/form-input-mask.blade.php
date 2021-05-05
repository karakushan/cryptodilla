@section('title') 
Form Input Mask
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
                    <h5 class="card-title">Date</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-date" name="inputmask-date" placeholder="dd/mm/yyyy">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Time</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-time" name="inputmask-time" placeholder="hh:mm">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Date & Time</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-datetime" name="inputmask-datetime" placeholder="dd/mm/yyyy hh:mm">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Phone</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-phone" name="inputmask-phone" placeholder="(__) ___-___-____">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Zipcode</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-zipcode" name="inputmask-zipcode" placeholder="______">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Email</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-email" name="inputmask-email" placeholder="_@_._">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Decimal</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-decimal" name="inputmask-decimal" placeholder="0.00">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Currency</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-currency" name="inputmask-currency" placeholder="$ 0.00">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">IP Address</h5>
                </div>
                <div class="card-body">
                    <input class="form-control" id="inputmask-ip" name="inputmask-ip" placeholder="___.___.___.___">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Card Number</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-card-number" name="inputmask-card-number" placeholder="____ ____ ____ ____">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Card CVV</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-card-cvv" name="inputmask-card-csv" placeholder="___">
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Card Due Date</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="inputmask-card-date" name="inputmask-card-date" placeholder="__/__">
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
<!-- Input Mask js -->
<script src="{{ asset('assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-inputmask.js') }}"></script>
@endsection 