@section('title') 
Form Date Picker
@endsection 
@extends('layouts.main')
@section('style')
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
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
                    <h5 class="card-title">Default Date</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">                                  
                    <input type="text" id="default-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon2"/>
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                      </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Auto Close Date</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">                                  
                    <input type="text" id="autoclose-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon3"/>
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon3"><i class="feather icon-calendar"></i></span>
                      </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Month View Date</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="month-view-date" class="form-control" placeholder="Month 2018" aria-describedby="basic-addon4" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon4"><i class="feather icon-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Time Format</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="time-format" class="form-control" placeholder="dd/mm/yyyy - hh:ii aa" aria-describedby="basic-addon5" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon5"><i class="feather icon-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Multi Date</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="multi-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy - dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon6" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon6"><i class="feather icon-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Range Dates</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="range-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy - dd/mm/yyyy" aria-describedby="basic-addon7" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon7"><i class="feather icon-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Min and Max Dates</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="min-max-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon8" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon8"><i class="feather icon-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Disable days of week</h5>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="disable-day-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon9" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon9"><i class="feather icon-calendar"></i></span>
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
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script>
@endsection 