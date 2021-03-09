@section('title') 
Form Uploads
@endsection 
@extends('layouts.main')
@section('style')
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">File upload</h5>
                </div>
                <div class="card-body">
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
                    <div class="text-center m-t-15">
                        <button type="button" class="btn btn-primary">Upload File</button>
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
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
@endsection 