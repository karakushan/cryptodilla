@section('title') 
Embeds
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
                    <h5 class="card-title">Aspect ratios - 21:9</h5>                                
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using the class <code class="highlighter-rouge">.embed-responsive-21by9</code></h6>
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Aspect ratios - 16:9</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using the class <code class="highlighter-rouge">.embed-responsive-16by9</code></h6>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Aspect ratios - 4:3</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using the class <code class="highlighter-rouge">.embed-responsive-4by3</code></h6>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Aspect ratios - 1:1</h5>
                </div>
                <div class="card-body">                                
                    <h6 class="card-subtitle">Using the class <code class="highlighter-rouge">.embed-responsive-1by1</code></h6>
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- End col -->
    </div>   
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')

@endsection 