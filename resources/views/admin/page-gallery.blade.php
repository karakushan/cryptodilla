@section('title') 
Gallery
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
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="gallery-filter-box text-center m-b-30">
                        <div class="gallery-filter">  
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="filter-item current" data-filter="*">All</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".latest">Latest</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".fashion">Fashion</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".popular">Popular</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".trending">Trending</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".sale">Sale</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="gallery-item-box">
                        <div class="gallery-item-box">
                            <div class="grid row justify-content-md-center">
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 latest">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-1.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>latest</p>
                                            <h5><a href="#">T-Shirt</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 fashion">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-2.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>fashion</p>
                                            <h5><a href="#">Jeans</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 popular">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-3.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>popular</p>
                                            <h5><a href="#">Shirt</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 trending">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-4.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>trending</p>
                                            <h5><a href="#">Dress</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 sale">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-5.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>sale</p>
                                            <h5><a href="#">Saari</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 latest">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-6.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>latest</p>
                                            <h5><a href="#">Shoes</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 fashion">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-7.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>fashion</p>
                                            <h5><a href="#">Belt</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 popular">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-8.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>popular</p>
                                            <h5><a href="#">Goggals</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 trending">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-9.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>trending</p>
                                            <h5><a href="#">Watch</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 sale">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-10.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>sale</p>
                                            <h5><a href="#">Bracelet</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 fashion">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-11.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>fashion</p>
                                            <h5><a href="#">Ring</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 sale">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-12.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>sale</p>
                                            <h5><a href="#">Chain</a></h5>
                                        </div>      
                                    </div>
                                </div>
                            </div>
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
<!-- Isotope js -->
<script src="{{ asset('assets/plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-gallery.js') }}"></script>
@endsection 