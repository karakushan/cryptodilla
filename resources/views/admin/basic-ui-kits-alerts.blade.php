@section('title') 
Alerts
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
                    <h5 class="card-title">Examples</h5>                                
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight <strong>required</strong> contextual classes (e.g., <code class="highlighter-rouge">.alert-success</code>). For inline dismissal, use the alerts jQuery plugin.</h6>
                    <div class="alert-list">
                        <div class="alert alert-primary" role="alert">
                          A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                          A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                          A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                          A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                          A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                          A simple info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                          A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                          A simple dark alert—check it out!
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
                    <h5 class="card-title">Link color</h5>                                
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use the <code class="highlighter-rouge">.alert-link</code> utility class to quickly provide matching colored links within any alert.</h6>
                    <div class="alert-list">
                        <div class="alert alert-primary" role="alert">
                          A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                          A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                          A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                          A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                          A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                          A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                          A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-dark" role="alert">
                          A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
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
                    <h5 class="card-title">Additional content</h5>                                
                </div>
                <div class="card-body">  
                    <h6 class="card-subtitle">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</h6>
                    <div class="alert-list">
                        <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Well done!</h4>
                          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                          <hr>
                          <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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
                    <h5 class="card-title">Dismissing</h5>                                
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add a dismiss button and the <code class="highlighter-rouge">.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code class="highlighter-rouge">.close</code> button.</h6>
                    <div class="alert-list">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Well Done!</strong> You should check in on some of those fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>  
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Ohh no!</strong> You should check in on some of those fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
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