@section('title') 
Single Product
@endsection 
@extends('layouts.main')
@section('style')
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
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
                    <div class="row">
                        <div class="col-lg-6 col-xl-5">
                            <div class="product-slider-box product-box-for">
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_01.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_02.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-primary font-14">New</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_03.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-danger font-14">Price Drop</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_04.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">Sale</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_05.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-warning font-14">Trending</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_06.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-info font-14">Popular</span></p>
                                </div>
                            </div>
                            <div class="product-slider-box product-box-nav">
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_01.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_02.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_03.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_04.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_05.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_06.jpg" class="img-fluid" alt="Product">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">Pupular</span></p>
                            <h2 class="font-22">Apple Watch</h2>
                            <p>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star"></i>
                                <i class="feather icon-star"></i>
                                <span class="ml-2">25 Ratings</span>
                            </p>
                            <p class="text-primary font-26 f-w-7 my-3"><sup class="font-16">$</sup>350</p>
                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                        
                            <div class="custom-radio-button mt-3">
                                <h6>Select Color</h6>
                                <div class="form-check-inline radio-primary">
                                  <input type="radio" id="customRadioInline5" name="customRadioInline2" class="" checked>
                                  <label for="customRadioInline5"></label>
                                </div>
                                <div class="form-check-inline radio-secondary">
                                  <input type="radio" id="customRadioInline6" name="customRadioInline2" class="">
                                  <label for="customRadioInline6"></label>
                                </div>
                                <div class="form-check-inline radio-success">
                                  <input type="radio" id="customRadioInline7" name="customRadioInline2" class="">
                                  <label for="customRadioInline7"></label>
                                </div>
                                <div class="form-check-inline radio-danger">
                                  <input type="radio" id="customRadioInline8" name="customRadioInline2" class="">
                                  <label for="customRadioInline8"></label>
                                </div>
                                <div class="form-check-inline radio-warning">
                                  <input type="radio" id="customRadioInline9" name="customRadioInline2" class="">
                                  <label for="customRadioInline9"></label>
                                </div>
                                <div class="form-check-inline radio-info">
                                  <input type="radio" id="customRadioInline10" name="customRadioInline2" class="">
                                  <label for="customRadioInline10"></label>
                                </div>
                                <div class="form-check-inline radio-light">
                                  <input type="radio" id="customRadioInline11" name="customRadioInline2" class="">
                                  <label for="customRadioInline11"></label>
                                </div>
                                <div class="form-check-inline radio-dark">
                                  <input type="radio" id="customRadioInline12" name="customRadioInline2" class="">
                                  <label for="customRadioInline12"></label>
                                </div>
                            </div>
                            <div class="button-list mt-5 mb-5">
                                <button type="button" class="btn btn-danger-rgba font-18"><i class="feather icon-heart"></i></button>
                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag mr-2"></i>Add to Cart</button>
                                <button type="button" class="btn btn-success font-17">Buy Now</button>
                            </div>
                            <div class="button-list">
                                <h6 class="mb-3">Share this product</h6>
                                <a href="#" class="btn btn-primary-rgba font-18"><i class="feather icon-facebook"></i></a>
                                <a href="#" class="btn btn-info-rgba font-18"><i class="feather icon-twitter"></i></a>
                                <a href="#" class="btn btn-danger-rgba font-18"><i class="feather icon-instagram"></i></a>
                                <a href="#" class="btn btn-warning-rgba font-18"><i class="feather icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Product Details</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab-line" data-toggle="tab" href="#description-line" role="tab" aria-controls="description-line" aria-selected="true"><i class="feather icon-file-text mr-2"></i>Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab-line" data-toggle="tab" href="#review-line" role="tab" aria-controls="review-line" aria-selected="false"><i class="feather icon-star mr-2"></i>Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="guide-tab-line" data-toggle="tab" href="#guide-line" role="tab" aria-controls="guide-line" aria-selected="false"><i class="feather icon-book-open mr-2"></i>Guide</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade show active" id="description-line" role="tabpanel" aria-labelledby="description-tab-line">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="tab-pane fade" id="review-line" role="tabpanel" aria-labelledby="review-tab-line">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="assets/images/users/men.svg" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">John Smith</h5>
                                        <p class="text-muted font-14">
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star"></i>
                                            <i class="feather icon-star"></i>
                                        </p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <img src="assets/images/users/boy.svg" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">Michelle Johnson</h5>
                                        <p class="text-muted font-14">
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star"></i>
                                        </p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <img src="assets/images/users/girl.svg" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">Denzel Page</h5>  
                                        <p class="text-muted font-14">
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star"></i>
                                            <i class="feather icon-star"></i>
                                            <i class="feather icon-star"></i>
                                        </p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="guide-line" role="tabpanel" aria-labelledby="guide-tab-line">
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Related Products</h5>
                </div>
                <div class="card-body">
                    <!-- Start row -->
                    <div class="row">                                    
                        <!-- Start col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <a href="{{url('/ecommerce-single-product')}}"><img src="assets/images/ecommerce/product_img_02.jpg" class="img-fluid" alt="product"></a>
                                    <p><span class="badge badge-primary font-14">New</span></p>
                                </div>                                            
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">Audio</span>
                                            </div>
                                            <div class="d-inline-block float-right">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star"></i>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h6 class="mt-1 mb-3">Apple Air Pod</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">$</sup>120</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <a href="{{url('/ecommerce-single-product')}}"><img src="assets/images/ecommerce/product_img_03.jpg" class="img-fluid" alt="product"></a>
                                    <p><span class="badge badge-danger font-14">Price Drop</span></p>
                                </div>                                            
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">Phone</span>
                                            </div>
                                            <div class="d-inline-block float-right">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star"></i>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h6 class="mt-1 mb-3">Apple iPhone XR</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">$</sup>1110</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <a href="{{url('/ecommerce-single-product')}}"><img src="assets/images/ecommerce/product_img_04.jpg" class="img-fluid" alt="product"></a>
                                    <p><span class="badge badge-success font-14">Sale</span></p>  
                                </div>                                            
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">Tablet</span>
                                            </div>
                                            <div class="d-inline-block float-right">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star"></i>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h6 class="mt-1 mb-3">Apple iPad Mini</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">$</sup>430</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <a href="{{url('/ecommerce-single-product')}}"><img src="assets/images/ecommerce/product_img_05.jpg" class="img-fluid" alt="product"></a>
                                    <p><span class="badge badge-warning font-14">Trending</span></p>   
                                </div>                                            
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">Laptop</span>
                                            </div>
                                            <div class="d-inline-block float-right">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star"></i>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h6 class="mt-1 mb-3">Apple Mac Book Air</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">$</sup>1700</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag"></i></button>
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
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection 