@section('title') 
Checkout
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
                    <h5 class="card-title">Multi Steps Checkout</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div id="basic-form-wizard">
                                <div>
                                    <h3>Login</h3>
                                    <section>
                                        <h4 class="text-center font-22 mb-5">Login</h4>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                        <label class="custom-control-label" for="rememberMe">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="forgot-psw-link">
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg btn-block py-2 font-18">Login Now</button>
                                        <div class="partition">
                                            <hr>
                                            <h6><span>or Login with</span></h6>
                                        </div>
                                        <div class="social-login text-center">
                                            <div class="button-list">
                                                <button type="button" class="btn btn-round btn-primary-rgba"><i class="feather icon-facebook"></i></button>
                                                <button type="button" class="btn btn-round btn-danger-rgba">G</button>
                                            </div>
                                        </div>
                                        <p class="text-center mb-0 mt-3">Don't have a account? <a href="">Register Now</a></p>
                                    </section>
                                    <h3>Billing</h3>
                                    <section>
                                        <h4 class="text-center font-22 mb-5">Billing Address</h4>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="billingFirstName">First Name</label>
                                                <input type="text" class="form-control" id="billingFirstName">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="billingLastName">Last Name</label>
                                                    <input type="text" class="form-control" id="billingLastName">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="billingAddress">DeliveryAddress</label>
                                                <input type="text" class="form-control" id="billingAddress">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="billingCity">City</label>
                                                    <input type="text" class="form-control" id="billingCity">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="billingState">State</label>
                                                    <select id="billingState" class="form-control">
                                                        <option selected>Select State</option>
                                                        <option value="california">California</option>
                                                        <option value="texas">Texas</option>
                                                        <option value="alaska">Alaska</option>
                                                        <option value="queensland">Queensland</option>
                                                        <option value="victoria">Victoria</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="billingMobileNumber">Mobile Number</label>
                                                    <input type="text" class="form-control" id="billingMobileNumber">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="billingZipcode">Zip Code</label>
                                                    <input type="text" class="form-control" id="billingZipcode">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="shippingCheck">
                                                    <label class="custom-control-label" for="shippingCheck">Shipping Address is same as above</label>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <h3>Pay</h3>
                                    <section>
                                        <h4 class="text-center font-22 mb-5">Make Payment</h4>
                                        <ul class="nav nav-pills justify-content-center custom-tab-button mb-3" id="pills-tab-button" role="tablist">
                                            <li class="nav-item mr-1">
                                                <a class="nav-link border active" id="pills-card-tab-button" data-toggle="pill" href="#pills-card-button" role="tab" aria-controls="pills-card-button" aria-selected="true"><span class="tab-btn-icon"><i class="feather icon-credit-card"></i></span>Card</a>
                                            </li>
                                            <li class="nav-item mr-0">
                                                <a class="nav-link border" id="pills-paypal-tab-button" data-toggle="pill" href="#pills-paypal-button" role="tab" aria-controls="pills-paypal-button" aria-selected="false"><span class="tab-btn-icon"><i class="mdi mdi-paypal"></i></span>Paypal</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent-button">
                                            <div class="tab-pane fade show active" id="pills-card-button" role="tabpanel" aria-labelledby="pills-card-tab-button">
                                                <div class='card-wrapper'></div>
                                                <form class="card-form">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="cardnumber">Card Number</label>
                                                            <input type="text" class="form-control" name="cardnumber" id="cardnumber">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="cardfullname">Full Name</label>
                                                            <input type="text" class="form-control" name="cardfullname" id="cardfullname">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="cardexpiry">Expiry Date</label>
                                                            <input type="text" class="form-control" name="cardexpiry" id="cardexpiry">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="cardcvc">CVC</label>
                                                            <input type="text" class="form-control" name="cardcvc" id="cardcvc">
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary btn-lg btn-block py-2 font-18">Pay Now</button>
                                                    </div>
                                                </form>                                                            
                                            </div>
                                            <div class="tab-pane fade" id="pills-paypal-button" role="tabpanel" aria-labelledby="pills-paypal-tab-button">
                                                <button type="button" class="btn btn-primary btn-lg btn-block py-2 mt-5 font-18">Pay via Paypal</button>
                                            </div>
                                        </div>
                                    </section>
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
<!-- Form Step js -->
<script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>    
<script src="{{ asset('assets/js/custom/custom-form-wizard.js') }}"></script>
<!-- Card js -->
<script src="{{ asset('assets/plugins/creditcard/card.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-creditcard.js') }}"></script>
@endsection 