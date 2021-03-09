@section('title') 
Form Wizards
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- End col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Basic Form Wizard</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form id="basic-form-wizard" action="#">
                                <div>
                                    <h3>Start</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Create an Account !!!</h4>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirmPassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPassword">
                                        </div>
                                    </section>
                                    <h3>Profile</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Setup Your Profile !!!</h4>
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email ID</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address">
                                        </div>
                                    </section>
                                    <h3>Hints</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">See Your Hints !!!</h4>
                                        <ul>
                                            <li><strong>First Name :</strong> John</li>
                                            <li><strong>Last Name :</strong> Doe</li>
                                            <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                            <li><strong>Address :</strong> 123, Street, City.</li>
                                        </ul>
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Let's Finished !!!</h4>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="acceptTerms">
                                          <label class="custom-control-label" for="acceptTerms">I Agree with the Terms and Conditions.</label>
                                        </div>
                                    </section>
                                </div>
                            </form>  
                        </div>  
                    </div>                             
                </div>
            </div>
        </div>  
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Vertical Form Wizard</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <form id="vertical-form-wizard" action="#">
                                <div>
                                    <h3>Start</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Create an Account !!!</h4>
                                        <div class="form-group">
                                            <label for="verticalusername">Username</label>
                                            <input type="text" class="form-control" id="verticalusername">
                                        </div>
                                        <div class="form-group">
                                            <label for="verticalpassword">Password</label>
                                            <input type="password" class="form-control" id="verticalpassword">
                                        </div>
                                        <div class="form-group">
                                            <label for="verticalconfirmPassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="verticalconfirmPassword">
                                        </div>
                                    </section>
                                    <h3>Profile</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Setup Your Profile !!!</h4>
                                        <div class="form-group">
                                            <label for="verticalfirstname">First Name</label>
                                            <input type="text" class="form-control" id="verticalfirstname">
                                        </div>
                                        <div class="form-group">
                                            <label for="verticallastname">Last Name</label>
                                            <input type="text" class="form-control" id="verticallastname">
                                        </div>
                                        <div class="form-group">
                                            <label for="verticalemail">Email ID</label>
                                            <input type="email" class="form-control" id="verticalemail">
                                        </div>
                                        <div class="form-group">
                                            <label for="verticaladdress">Address</label>
                                            <input type="text" class="form-control" id="verticaladdress">
                                        </div>
                                    </section>
                                    <h3>Hints</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">See Your Hints !!!</h4>
                                        <ul>
                                            <li><strong>First Name :</strong> John</li>
                                            <li><strong>Last Name :</strong> Doe</li>
                                            <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                            <li><strong>Address :</strong> 123, Street, City.</li>
                                        </ul>
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Let's Finished !!!</h4>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="verticalacceptTerms">
                                          <label class="custom-control-label" for="verticalacceptTerms">I Agree with the Terms and Conditions.</label>
                                        </div>
                                    </section>
                                </div>
                            </form> 
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
@endsection 