@section('title') 
Spinners
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
                    <h5 class="card-title">Border Spinner</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use the border spinners for a lightweight loading indicator.</h6>
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Growing Spinner</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">If you don’t fancy a border spinner, switch to the grow spinner.</h6>
                    <div class="spinner-grow" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Colors Spinners</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">The border spinner uses <code class="highlighter-rouge">currentColor</code> for its <code class="highlighter-rouge">border-color</code>, meaning you can customize the color with <a href="/docs/4.3/utilities/colors/">text color utilities</a>. You can use any of our text color utilities on the standard spinner.</h6>
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-info" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-light" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Growing Colors Spinner</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Once again, this spinner is built with <code class="highlighter-rouge">currentColor</code>, so you can easily change its appearance with <a href="/docs/4.3/utilities/colors/">text color utilities</a>. Here it is in blue, along with the supported variants.</h6>
                    <div class="spinner-grow text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Alignment</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Spinners in Bootstrap are built with <code class="highlighter-rouge">rem</code>s, <code class="highlighter-rouge">currentColor</code>, and <code class="highlighter-rouge">display: inline-flex</code>. This means they can easily be resized, recolored, and quickly aligned.</h6>
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
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
                    <h5 class="card-title">Placement</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use <a href="/docs/4.3/utilities/flex/">flexbox utilities</a>, <a href="/docs/4.3/utilities/float/">float utilities</a>, or <a href="/docs/4.3/content/typography/">text alignment</a> utilities to place spinners exactly where you need them in any situation.</h6>
                    <div class="d-flex align-items-center">
                        <strong>Loading...</strong>
                        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Size</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.spinner-border-sm</code> and <code class="highlighter-rouge">.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</h6>
                    <div class="row align-items-center">
                        <div class="col-lg-6 pb-3">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
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
                    <h5 class="card-title">Buttons</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</h6>
                    <div class="row align-items-center">
                        <div class="col-lg-6 pb-3">
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
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

@endsection 