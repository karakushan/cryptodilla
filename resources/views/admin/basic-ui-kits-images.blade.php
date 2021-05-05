@section('title') 
Images
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
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image Thumbnails</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">In addition to our border-radius utilities, you can use <code class="highlighter-rouge">.img-thumbnail</code> to give an image a rounded 1px border appearance.</h6>
                    <img src="assets/images/ui-images/image-thumbnail.jpg" alt="Thumbnail Image" class="img-thumbnail">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image Rounded</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">In addition to our border-radius utilities, you can use <code class="highlighter-rouge">.rounded</code> to give an image a rounded 1px border appearance.</h6>
                    <img src="assets/images/ui-images/image-rounded.jpg" alt="Rounded Image" class="rounded">                               
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image Circle</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">In addition to our border-radius utilities, you can use <code class="highlighter-rouge">.rounded-circle</code> to give an image a rounded 1px border appearance.</h6>
                    <img src="assets/images/ui-images/image-circle.jpg" alt="Rounded Image" class="rounded-circle">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image Left</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Align images with the helper float classes. <code class="highlighter-rouge">.float-left or .float-right</code></h6>
                    <img src="assets/images/ui-images/image-left.jpg" alt="Rounded Image" class="rounded float-left">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image Center</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">In addition to our image position utilities, you can use <code class="highlighter-rouge">.mx-auto & .d-block</code>.</h6>
                    <img src="assets/images/ui-images/image-center.jpg" alt="Rounded Image" class="rounded mx-auto d-block">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image Right</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Align images with the helper float classes. <code class="highlighter-rouge">.float-left or .float-right</code></h6>
                    <img src="assets/images/ui-images/image-right.jpg" alt="Rounded Image" class="rounded float-right">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Responsive Images</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Images in Bootstrap are made responsive with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width: 100%;</code> and <code class="highlighter-rouge">height: auto;</code> are applied to the image so that it scales with the parent element.</h6>
                    <img src="assets/images/ui-images/image-responsive.jpg" class="img-fluid" alt="Responsive image">
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