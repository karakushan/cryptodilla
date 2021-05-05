@section('title') 
Tour
@endsection 
@extends('layouts.main')
@section('style')
<!-- Product Tour css -->
<link href="{{ asset('assets/plugins/product-tour/product-tour.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row tourbar"> 
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30" id="tour-form">
                <div class="card-header">
                    <h5 class="card-title">Form row</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.</h6>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input mt-2" type="checkbox" id="gridCheck">
                                <label class="form-check-label ml-3" for="gridCheck">
                                Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30" id="tour-card">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-18">Card title</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> 
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">                            
                <div class="card-body">
                    <h5 class="card-title font-18">Card title</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-2.jpg" alt="Card image cap">
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-3.jpg" alt="Card image cap">  
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-4.jpg" alt="Card image cap">  
                <div class="card-body">
                    <h5 class="card-title font-18">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-body pt-0">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div> 
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pagination</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping <code class="highlighter-rouge">&lt;nav&gt;</code> element to identify it as a navigation section to screen readers and other assistive technologies.</h6>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30" id="tour-spinner">
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
        <div class="col-md-12 col-lg-6 col-xl-4">
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
    </div>
    <!-- End row --> 
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Dropzone JS -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- Product Tour js -->
<script src="{{ asset('assets/plugins/product-tour/product-tour.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-tour.js') }}"></script>
@endsection 