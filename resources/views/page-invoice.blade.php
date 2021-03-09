@section('title') 
Invoice
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- End row -->
    <div class="row justify-content-center">
        <!-- Start col -->
        <div class="col-md-12 col-lg-10 col-xl-10">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="invoice">
                        <div class="invoice-head">
                            <div class="row">
                                <div class="col-12 col-md-7 col-lg-7">
                                    <div class="invoice-logo">
                                        <img src="assets/images/logo.svg" class="img-fluid" alt="invoice-logo">
                                    </div>
                                    <h4>Orbiter Design Inc.</h4>
                                    <p>The Complete Web Solutions Partner</p>
                                    <p class="mb-0">21st Street, Titanium Tower, Times Square, Nevada Campus, New Jersey - 55986 USA.</p>
                                </div>
                                <div class="col-12 col-md-5 col-lg-5">
                                    <div class="invoice-name">
                                        <h5 class="text-uppercase mb-3">Invoice</h5>
                                        <p class="mb-1">No : #98765</p>
                                        <p class="mb-0">15 July, 2019</p>
                                        <h4 class="text-success mb-0 mt-3">$1180</h4>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="invoice-billing">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="invoice-address">
                                        <h6 class="mb-3">Bill to</h6>
                                        <h6 class="text-muted">Amy Adams</h6>
                                        <ul class="list-unstyled">
                                            <li>417 Redbud Drive, Manhattan Building, Whitestone, NY, New York-11357</li>  
                                            <li>+1-9876543210</li>  
                                            <li>amyadams@email.com</li>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="invoice-address">
                                        <h6 class="mb-3">Shipped to</h6>
                                        <h6 class="text-muted">Amy Adams</h6>
                                        <ul class="list-unstyled">
                                            <li>417 Redbud Drive, Manhattan Building, Whitestone, NY, New York-11357</li>  
                                            <li>+1-9876543210</li>  
                                            <li>amyadams@email.com</li>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="invoice-address">
                                        <div class="card">
                                            <div class="card-body bg-info-rgba text-center">
                                                <h6>Payment Method</h6>
                                                <p><i class="mdi mdi-paypal text-info font-40"></i></p>
                                                <p>via PayPal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="invoice-summary">
                            <div class="table-responsive ">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>                       
                                            <th scope="col">Photo</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                            <td>Apple Watch</td>
                                            <td>1</td>
                                            <td>$10</td>
                                            <td class="text-right">$500</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                            <td>Apple iPhone</td>
                                            <td>2</td>
                                            <td>$20</td>
                                            <td class="text-right">$200</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>                          
                                            <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                            <td>Apple iPad</td>
                                            <td>3</td>
                                            <td>$30</td>
                                            <td class="text-right">$300</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-summary-total">
                            <div class="row">
                                <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                    <div class="order-note">
                                        <p class="mb-3"><span class="badge badge-info-inverse font-14">This is Free Shipping Order</span></p>
                                        <h6>Special Note for this order:</h6>
                                        <p>Please, Pack with product air bag and handle with care.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                    <div class="order-total table-responsive ">
                                        <table class="table table-borderless text-right">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total :</td>
                                                    <td>$1000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charges :</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Tax (18%) :</td>
                                                    <td>$180.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="f-w-7 font-18"><h5>Amount Payable :</h5></td>
                                                    <td class="f-w-7 font-18"><h5>$1180.00</h5></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-meta">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="invoice-meta-box">
                                        <h6 class="mb-3">Terms & Conditions</h6>
                                        <ul class="pl-3">
                                            <li>Goods once sold will not be taken back.</li>  
                                            <li>We are responsible for Courier Damage.</li>  
                                            <li>Subjects to NY Jurisdiction.</li>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="invoice-meta-box">
                                        <h6 class="mb-3">Contact Us</h6>
                                        <ul class="list-unstyled">
                                            <li><i class="feather icon-aperture mr-2"></i>www.example.com</li>  
                                            <li><i class="feather icon-mail mr-2"></i>demo@example.com</li>  
                                            <li><i class="feather icon-phone mr-2"></i>+1-9876543210</li>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="invoice-meta-box text-right">
                                        <h6 class="mb-0">Authorized Signatory</h6>
                                        <img src="assets/images/general/signature.svg" class="img-fluid my-3" alt="signature">
                                        <p class="mb-0">Jennifer C Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="invoice-footer">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p class="mb-0">Thank yopu for your Business.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-footer-btn">
                                        <a href="javascript:window.print()" class="btn btn-primary-rgba py-1 font-16"><i class="feather icon-printer mr-2"></i>Print</a>
                                        <a href="#" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Submit</a>
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

@endsection 