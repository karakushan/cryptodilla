@section('title') 
Vector Map
@endsection 
@extends('layouts.main')
@section('style')
<!-- jvectormap css -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">World Map</h5>
                </div>
                <div class="card-body">
                    <div id="world-map" style="height: 420px"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">USA</h5>
                </div>
                <div class="card-body">
                    <div id="usa" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">India</h5>
                </div>
                <div class="card-body">
                    <div id="india" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Australia</h5>
                </div>
                <div class="card-body">
                    <div id="australia" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Argentina</h5>
                </div>
                <div class="card-body">
                    <div id="argentina" style="height: 400px"></div>
                </div>
            </div>
        </div>            
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Russia</h5>
                </div>
                <div class="card-body">
                    <div id="russia" style="height: 400px"></div>
                </div>
            </div>
        </div>            
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">South Africa</h5>
                </div>
                <div class="card-body">
                    <div id="south-africa" style="height: 400px"></div>
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
<!-- Vector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/gdp-data.js') }}"></script>    
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-ar-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-ru-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-za-mill.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-jvectormap.js') }}"></script> 
@endsection 