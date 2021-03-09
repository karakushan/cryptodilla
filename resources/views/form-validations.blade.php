@section('title') 
Form Validations
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
                    <h5 class="card-title">Form Validation</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">For custom Bootstrap form validation messages, you’ll need to add the <code class="highlighter-rouge">novalidate</code> boolean attribute to your <code class="highlighter-rouge">&lt;form&gt;</code>.</h6>
                    <form class="needs-validation" novalidate>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom01">First name</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom02">Last name</label>
                          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustomUsername">Username</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationCustom03">City</label>
                          <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationCustom04">State</label>
                          <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                          <div class="invalid-feedback">
                            Please provide a valid state.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationCustom05">Zip</label>
                          <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                          </label>
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Tooltips Validations</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">If your form layout allows it, you can swap the <code class="highlighter-rouge">.{valid|invalid}-feedback</code> classes for <code class="highlighter-rouge">.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code class="highlighter-rouge">position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</h6>
                    <form class="needs-validation" novalidate>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltip01">First name</label>
                          <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                          <div class="valid-tooltip">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltip02">Last name</label>
                          <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                          <div class="valid-tooltip">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltipUsername">Username</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                              Please choose a unique and valid username.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationTooltip03">City</label>
                          <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                          <div class="invalid-tooltip">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip04">State</label>
                          <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                          <div class="invalid-tooltip">
                            Please provide a valid state.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltip05">Zip</label>
                          <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                          <div class="invalid-tooltip">
                            Please provide a valid zip.
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>                                                                                               

                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Browser defaults</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults.</h6>
                    <form>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationDefault01">First name</label>
                          <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationDefault02">Last name</label>
                          <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationDefaultUsername">Username</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationDefault03">City</label>
                          <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationDefault04">State</label>
                          <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationDefault05">Zip</label>
                          <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                          <label class="form-check-label" for="invalidCheck2">
                            Agree to terms and conditions
                          </label>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>                                

                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Server side</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">We recommend using client side validation, but in case you require server side, you can indicate invalid and valid form fields with <code class="highlighter-rouge">.is-invalid</code> and <code class="highlighter-rouge">.is-valid</code>. Note that <code class="highlighter-rouge">.invalid-feedback</code> is also supported with these classes.</h6>
                    <form>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationServer01">First name</label>
                          <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationServer02">Last name</label>
                          <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationServerUsername">Username</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationServer03">City</label>
                          <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationServer04">State</label>
                          <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                          <div class="invalid-feedback">
                            Please provide a valid state.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationServer05">Zip</label>
                          <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                          <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                          </label>
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Supported elements</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Our example forms show native textual <code class="highlighter-rouge">&lt;input&gt;</code>s above, but form validation styles are available for our custom form controls, too.</h6>
                    <form class="was-validated">
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                        <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                        <div class="invalid-feedback">Example invalid feedback text</div>
                      </div>

                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                      </div>
                      <div class="form-group">
                        <select class="custom-select" required>
                          <option value="">Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>   
    <!-- End row -->
    <!-- Start row -->
    <div class="row justify-content-center">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Form Validation</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Basic form validation.</h6>
                    <form class="form-validate" action="#" method="post">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-username">User ID <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter User ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Enter Email ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-confirm-password">Re-Type Password <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Enter again passward for confirm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-suggestions">Description <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Enter Your Details."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-skill">Skill <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <select class="form-control" id="val-skill" name="val-skill">
                                    <option value="">Please select</option>
                                    <option value="web-development">Web Development</option>
                                    <option value="web-designing">Web Designing</option>
                                    <option value="ui-designing">UI Designing</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="testing">Testing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$45.75">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-website">Website <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://demo.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-phoneus">Phone <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="999-888-0000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="9">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-number">Number <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-number" name="val-number" placeholder="9.1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-range" name="val-range" placeholder="3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Terms &amp; Conditions <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                    <span class="css-control-indicator"></span> I agree to the terms & conditions of Orbiter
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label"></label>
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>                                  
                    </form>
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
<!-- Parsley js -->
<script src="{{ asset('assets/plugins/validatejs/validate.min.js') }}"></script>
<!-- Validate js -->
<script src="{{ asset('assets/js/custom/custom-validate.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-validation.js') }}"></script>
@endsection 