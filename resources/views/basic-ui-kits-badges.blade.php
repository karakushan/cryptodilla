@section('title') 
Badges
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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Examples</h5>                                
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Badges scale to match the size of the immediate parent element by using relative font sizing and <code
                        class="highlighter-rouge">em</code> units.</h6>
                    <div class="badge-list">
                        <h1>Example heading <span class="badge badge-default">New</span></h1>
                        <h2>Example heading <span class="badge badge-default">New</span></h2>
                        <h3>Example heading <span class="badge badge-default">New</span></h3>
                        <h4>Example heading <span class="badge badge-default">New</span></h4>
                        <h5>Example heading <span class="badge badge-default">New</span></h5>
                        <h6>Example heading <span class="badge badge-default">New</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Button or Links</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Badges can be used as part of links or buttons to provide a counter.</h6>
                    <div class="badge-list">
                        <button type="button" class="btn btn-primary">
                          Notifications <span class="badge badge-light">4</span>
                        </button> 
                        <button type="button" class="btn btn-primary">
                          Profile <span class="badge badge-light">9</span>
                          <span class="sr-only">unread messages</span>
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
                    <h5 class="card-title">Contextual variations</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add any of the below mentioned modifier classes to change the appearance of a badge.</h6>
                    <div class="badge-list">
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>                                    
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pill badges</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use the <code class="highlighter-rouge">.badge-pill</code> modifier class to make
                        badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code>
                        and additional horizontal <code class="highlighter-rouge">padding</code>).
                        Useful if you miss the badges from v3.</h6>
                    <div class="badge-list">
                        <span class="badge badge-pill badge-primary">Primary</span>
                        <span class="badge badge-pill badge-secondary">Secondary</span>
                        <span class="badge badge-pill badge-success">Success</span>
                        <span class="badge badge-pill badge-danger">Danger</span>
                        <span class="badge badge-pill badge-warning">Warning</span>
                        <span class="badge badge-pill badge-info">Info</span>
                        <span class="badge badge-pill badge-light">Light</span>
                        <span class="badge badge-pill badge-dark">Dark</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Links badges</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Using the contextual <code class="highlighter-rouge">.badge-*</code> classes on an <code class="highlighter-rouge">&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</h6>
                    <div class="badge-list">
                        <a href="#" class="badge badge-primary">Primary</a>
                        <a href="#" class="badge badge-secondary">Secondary</a>
                        <a href="#" class="badge badge-success">Success</a>
                        <a href="#" class="badge badge-danger">Danger</a>
                        <a href="#" class="badge badge-warning">Warning</a>
                        <a href="#" class="badge badge-info">Info</a>
                        <a href="#" class="badge badge-light">Light</a>
                        <a href="#" class="badge badge-dark">Dark</a>                                    
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