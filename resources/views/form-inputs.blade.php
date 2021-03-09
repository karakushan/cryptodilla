@section('title') 
Form Inputs
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
            <h5 class="card-title font-18">Input types</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Text</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="text"</code></h6>
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" name="inputText" id="inputText" placeholder="Text Input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Email</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="email"</code></h6>
                    <div class="form-group mb-0">
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="name@example.com">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Password</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="password"</code></h6>
                    <div class="form-group mb-0">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Number</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="number"</code></h6>
                    <div class="form-group mb-0">
                        <input type="number" class="form-control" name="inputNumber" id="inputNumber" value="1">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Search</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="search"</code></h6>
                    <div class="form-group mb-0">
                        <input type="Search" class="form-control" name="inputSearch" id="inputSearch" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">URL</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="url"</code></h6>
                    <div class="form-group mb-0">
                        <input type="url" class="form-control" name="inputUrl" id="inputUrl" placeholder="https://getbootstrap.com">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Tel</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="tel"</code></h6>
                    <div class="form-group mb-0">
                        <input type="tel" class="form-control" name="inputTel" id="inputTel" placeholder="+1 9876543210">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">File</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="file"</code></h6>
                    <div class="form-group mb-0">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Date & Time</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="datetime-local"</code></h6>
                    <div class="form-group mb-0">
                        <input type="datetime-local" class="form-control" name="inputDateTime" id="inputDateTime">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Date</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="date"</code></h6>
                    <div class="form-group mb-0">
                        <input type="date" class="form-control" name="inputDate" id="inputDate">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Time</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="time"</code></h6>
                    <div class="form-group mb-0">
                        <input type="time" class="form-control" name="inputTime" id="inputTime">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Week</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="week"</code></h6>
                    <div class="form-group mb-0">
                        <input type="week" class="form-control" name="inputWeek" id="inputWeek">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Month</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="month"</code></h6>
                    <div class="form-group mb-0">
                        <input type="month" class="form-control" name="inputMonth" id="inputMonth">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Range</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="range"</code></h6>
                    <div class="form-group mb-0">
                        <input type="range" class="form-control" name="inputRange" id="inputRange" min="0" max="100">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Color</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>type="color"</code></h6>
                    <div class="form-group mb-0">
                        <input type="color" class="form-control" name="inputColor" id="inputColor" value="#0080ff">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Input type Properties</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Placeholder text</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>placeholder="....."</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputPlaceholder" id="inputPlaceholder" placeholder="Placeholder Text">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Readonly</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>readonly</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputReadonly" id="inputReadonly" placeholder="Readonly text" readonly>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Disabled</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>disabled</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputDisabled" id="inputDisabled" placeholder="Disabled text" disabled>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Static Value</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>.form-control-plaintext</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control-plaintext" name="inputStaticValue" id="inputStaticValue" value="example@email.com" readonly>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Value</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>value="....."</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputDefaultValue" id="inputDefaultValue" value="Default Value">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Min Value</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>minLength="....."</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputMinValue" id="inputMinValue" minLength="5" placeholder="Min Value">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Max Value</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>maxLength="....."</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputMaxValue" id="inputMaxValue" maxLength="5" placeholder="Max Value">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Helper text</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>.form-text</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputHelperText" id="inputHelperText" placeholder="Helper text">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                              Helper Text
                            </small>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Textarea</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>textarea</code></h6>
                    <div class="form-group">
                        <textarea class="form-control" name="inputTextarea" id="inputTextarea" rows="3" placeholder="Textarea text"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Select</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Select</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>select</code></h6>
                    <div class="form-group">
                        <select class="form-control" id="formControlSelect">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Multiple Select</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>multiple</code></h6>
                    <div class="form-group">
                        <select multiple class="form-control" id="formControlSelectMultiple">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Input type with different sizes</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Size</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>.form-control-md</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputDefaultSize" id="inputDefaultSize" placeholder="Default input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Small Size</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>.form-control-sm</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="inputSmallSize" id="inputSmallSize" placeholder="Small input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Large Size</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>.form-control-lg</code></h6>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="inputLargeSize" id="inputLargeSize" placeholder="Large input">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Grid Sizes</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Usage <code>.col-sm-4</code></h6>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Grid Sizes</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder=".col-sm-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 offset-sm-2">
                            <input type="text" class="form-control" placeholder=".col-sm-6">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            <input type="text" class="form-control" placeholder=".col-sm-8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="text" class="form-control" placeholder=".col-sm-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Custom Range</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Range</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Create custom <code class="highlighter-rouge">&lt;input type="range"&gt;</code> controls with <code class="highlighter-rouge">.custom-range</code>. The track (the background) and thumb (the value) are both styled to appear the same across browsers.</h6>
                    <input type="range" class="custom-range" id="customRange1">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Min Max Range</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Range inputs have implicit values for <code class="highlighter-rouge">min</code> and <code class="highlighter-rouge">max</code>—<code class="highlighter-rouge">0</code> and <code class="highlighter-rouge">100</code>, respectively. You may specify new values for those using the <code class="highlighter-rouge">min</code> and <code class="highlighter-rouge">max</code> attributes.</h6>
                    <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Steps Range</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">By default, range inputs “snap” to integer values. To change this, you can specify a <code class="highlighter-rouge">step</code> value. In the example below, we double the number of steps by using <code class="highlighter-rouge">step="0.5"</code>.</h6>
                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Checkboxe</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Checkbox</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code class="highlighter-rouge">.form-check</code>.</h6>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                      <label class="form-check-label" for="defaultCheck2">
                        Disabled checkbox
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Checkbox</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Each checkbox and radio is wrapped in a <code class="highlighter-rouge">&lt;div&gt;</code> with a sibling <code class="highlighter-rouge">&lt;span&gt;</code> to create our custom control and a <code class="highlighter-rouge">&lt;label&gt;</code> for the accompanying text. Structurally, this is the same approach as our default <code class="highlighter-rouge">.form-check</code>.</h6>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                        <label class="custom-control-label" for="customCheckDisabled">Disable custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label v-a-m" for="customCheck2"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Inline Checkbox</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.form-check-inline</code> to any <code class="highlighter-rouge">.form-check</code>.</h6>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                      <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Inline Checkbox</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.custom-control-inline</code>.</h6>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customCheckboxInline1">1</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline2" class="custom-control-input">
                      <label class="custom-control-label" for="customCheckboxInline2">2</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline3" class="custom-control-input" disabled>
                      <label class="custom-control-label" for="customCheckboxInline3">3 (disabled)</label>
                    </div>
                    <div class="custom-checkbox-button mt-3">
                        <h5 class="font-16">Custom Color Checkbox</h5>
                        <div class="form-check-inline checkbox-primary">
                          <input type="checkbox" id="customCheckboxInline5" name="customCheckboxInline2" checked>
                          <label for="customCheckboxInline5"></label>
                        </div>
                        <div class="form-check-inline checkbox-secondary">
                          <input type="checkbox" id="customCheckboxInline6" name="customCheckboxInline2">
                          <label for="customCheckboxInline6"></label>
                        </div>
                        <div class="form-check-inline checkbox-success">
                          <input type="checkbox" id="customCheckboxInline7" name="customCheckboxInline2">
                          <label for="customCheckboxInline7"></label>
                        </div>
                        <div class="form-check-inline checkbox-danger">
                          <input type="checkbox" id="customCheckboxInline8" name="customCheckboxInline2">
                          <label for="customCheckboxInline8"></label>
                        </div>
                        <div class="form-check-inline checkbox-warning">
                          <input type="checkbox" id="customCheckboxInline9" name="customCheckboxInline2">
                          <label for="customCheckboxInline9"></label>
                        </div>
                        <div class="form-check-inline checkbox-info">
                          <input type="checkbox" id="customCheckboxInline10" name="customCheckboxInline2">
                          <label for="customCheckboxInline10"></label>
                        </div>
                        <div class="form-check-inline checkbox-light">
                          <input type="checkbox" id="customCheckboxInline11" name="customCheckboxInline2">
                          <label for="customCheckboxInline11"></label>
                        </div>
                        <div class="form-check-inline checkbox-dark">
                          <input type="checkbox" id="customCheckboxInline12" name="customCheckboxInline2">
                          <label for="customCheckboxInline12"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Radios</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Default Radios</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code class="highlighter-rouge">.form-check</code>.</h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Default radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios2">
                        Second default radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                      <label class="form-check-label" for="exampleRadios3">
                        Disabled radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input position-static" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" aria-label="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Radios</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Each checkbox and radio is wrapped in a <code class="highlighter-rouge">&lt;div&gt;</code> with a sibling <code class="highlighter-rouge">&lt;span&gt;</code> to create our custom control and a <code class="highlighter-rouge">&lt;label&gt;</code> for the accompanying text. Structurally, this is the same approach as our default <code class="highlighter-rouge">.form-check</code>.</h6>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled>
                        <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label v-a-m" for="customRadio4"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Inline Radios</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.form-check-inline</code> to any <code class="highlighter-rouge">.form-check</code>.</h6>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                      <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Inline Radios</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Group checkboxes or radios on the same horizontal row by adding <code class="highlighter-rouge">.custom-control-inline</code>.</h6>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">1</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">2</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input" disabled>
                        <label class="custom-control-label" for="customRadioInline3">3</label>
                    </div>
                    <div class="custom-radio-button mt-3">
                        <h5 class="font-16">Custom Color Radio</h5>
                        <div class="form-check-inline radio-primary">
                          <input type="radio" id="customRadioInline5" name="customRadioInline2" checked>
                          <label for="customRadioInline5"></label>
                        </div>
                        <div class="form-check-inline radio-secondary">
                          <input type="radio" id="customRadioInline6" name="customRadioInline2">
                          <label for="customRadioInline6"></label>
                        </div>
                        <div class="form-check-inline radio-success">
                          <input type="radio" id="customRadioInline7" name="customRadioInline2">
                          <label for="customRadioInline7"></label>
                        </div>
                        <div class="form-check-inline radio-danger">
                          <input type="radio" id="customRadioInline8" name="customRadioInline2">
                          <label for="customRadioInline8"></label>
                        </div>
                        <div class="form-check-inline radio-warning">
                          <input type="radio" id="customRadioInline9" name="customRadioInline2">
                          <label for="customRadioInline9"></label>
                        </div>
                        <div class="form-check-inline radio-info">
                          <input type="radio" id="customRadioInline10" name="customRadioInline2">
                          <label for="customRadioInline10"></label>
                        </div>
                        <div class="form-check-inline radio-light">
                          <input type="radio" id="customRadioInline11" name="customRadioInline2">
                          <label for="customRadioInline11"></label>
                        </div>
                        <div class="form-check-inline radio-dark">
                          <input type="radio" id="customRadioInline12" name="customRadioInline2">
                          <label for="customRadioInline12"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <h5 class="card-title font-18">Switches</h5>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Custom Switches</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">A switch has the markup of a custom checkbox but uses the <code class="highlighter-rouge">.custom-switch</code> class to render a toggle switch. Switches also support the <code class="highlighter-rouge">disabled</code> attribute.</h6>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')

@endsection 