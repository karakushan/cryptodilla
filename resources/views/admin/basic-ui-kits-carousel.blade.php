@section('title') 
Carousel
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
                    <h5 class="card-title">Slides Only</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Here’s a carousel with slides only. Note the presence of the <code class="highlighter-rouge">.d-block</code> and <code class="highlighter-rouge">.w-100</code> on carousel images to prevent browser default image alignment.</h6>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="assets/images/ui-carousel/ui-carousel-1.jpg" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/images/ui-carousel/ui-carousel-2.jpg" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/images/ui-carousel/ui-carousel-3.jpg" class="d-block w-100" alt="Third slide">
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
                    <h5 class="card-title">With Controls</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Adding in the previous and next controls:</h6>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/ui-carousel/ui-carousel-4.jpg" class="d-block w-100" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-5.jpg" class="d-block w-100" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-6.jpg" class="d-block w-100" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">With Indicators</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">You can also add the indicators to the carousel, alongside the controls, too.</h6>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/ui-carousel/ui-carousel-7.jpg" class="d-block w-100" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-8.jpg" class="d-block w-100" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-9.jpg" class="d-block w-100" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>                               
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">With Captions</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add captions to your slides easily with the <code class="highlighter-rouge">.carousel-caption</code> element within any <code class="highlighter-rouge">.carousel-item</code>.</h6>
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/ui-carousel/ui-carousel-10.jpg" class="d-block w-100" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-11.jpg" class="d-block w-100" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-12.jpg" class="d-block w-100" alt="Third slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>                             
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Crossfade</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</h6>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/ui-carousel/ui-carousel-13.jpg" class="d-block w-100" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-14.jpg" class="d-block w-100" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-15.jpg" class="d-block w-100" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>                                                            
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Individual .carousel-item interval</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">data-interval=""</code> to a <code class="highlighter-rouge">.carousel-item</code> to change the amount of time to delay between automatically cycling to the next item.</h6>
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="assets/images/ui-carousel/ui-carousel-16.jpg" class="d-block w-100" alt="First slide">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="assets/images/ui-carousel/ui-carousel-17.jpg" class="d-block w-100" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/ui-carousel/ui-carousel-18.jpg" class="d-block w-100" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
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