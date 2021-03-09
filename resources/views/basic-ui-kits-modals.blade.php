@section('title') 
Modals
@endsection 
@extends('layouts.main')
@section('style')
<!-- Animate css -->
<link href="{{ asset('assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
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
                    <h5 class="card-title">Modal components</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Below is a <em>static</em> modal example (meaning its <code class="highlighter-rouge">position</code> and <code class="highlighter-rouge">display</code> have been overridden). Included are the modal header, modal body (required for <code class="highlighter-rouge">padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</h6>                      
                    <div class="modal-1 example-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Optional Sizes</h5>
                </div>
                <div class="card-body">                                
                    <h6 class="card-subtitle">Modals have two optional sizes, available via modifier classes to be placed on a <code class="highlighter-rouge">.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</h6>
                    <!-- Large modal -->
                    <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleLargeModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Small modal -->
                    <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleSmallModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Standard Modal</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</h6>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleStandardModal">
                      Standard Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleStandardModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted">Woohoo, you're reading this text in a modal!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Scrolling Long Content Modal</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</h6>                               
                   <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                      Scrolling Long Content Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Vertically Centered Modal</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add <code class="highlighter-rouge">.modal-dialog-centered</code> to <code class="highlighter-rouge">.modal-dialog</code> to vertically center the modal.</h6>                                
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Vertically Centered Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Tooltips and Popovers Modal</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle"><a href="/docs/4.1/components/tooltips/">Tooltips</a> and <a href="/docs/4.1/components/popovers/">popovers</a> can be placed within modals as needed. When modals are closed, any tooltips and popovers within are also automatically dismissed.</h6>                                
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers">
                      Tooltips and Popovers Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalPopovers" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalPopoversTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Using the Grid Modal</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Utilize the Bootstrap grid system within a modal by nesting <code class="highlighter-rouge">.container-fluid</code> within the <code class="highlighter-rouge">.modal-body</code>. Then, use the normal grid system classes as you would anywhere else.</h6>                                
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gridSystemModal">
                      Using the Grid Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="gridSystemModalTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid example-row">
                                        <div class="row">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                                            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9">
                                            Level 1: .col-sm-9
                                                <div class="row">
                                                    <div class="col-8 col-sm-6">
                                                    Level 2: .col-8 .col-sm-6
                                                    </div>
                                                    <div class="col-4 col-sm-6">
                                                    Level 2: .col-4 .col-sm-6
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
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
                    <h5 class="card-title">Varying Content Modal</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Have a bunch of buttons that all trigger the same modal with slightly different contents? Use <code class="highlighter-rouge">event.relatedTarget</code> and HTML <code class="highlighter-rouge">data-*</code> attributes (possibly via jQuery) to vary the contents of the modal depending on which button was clicked.</h6>
                    <!-- Button trigger modal -->
                   <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#varying-modal" data-whatever="@mdo">Open modal for @mdo</button>
                    <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#varying-modal" data-whatever="@fat">Open modal for @fat</button>
                    <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#varying-modal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                    <!-- Modal -->
                    <div class="modal fade" id="varying-modal" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varying-modal-label">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
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
                    <h5 class="card-title">Animated Modals</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">List of various animation model.</h6>
                    <div class="row">                                    
                        <div class="col-12">
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="slideInUp" data-toggle="modal" data-target="#exampleModalLong-1">
                                SlideIn (Up)
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="slideInDown" data-toggle="modal" data-target="#exampleModalLong-1">
                                SlideIn (Down)
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="slideInLeft" data-toggle="modal" data-target="#exampleModalLong-1">
                                SlideIn (Left)
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="slideInRight" data-toggle="modal" data-target="#exampleModalLong-1">
                                SlideIn (Right)
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="zoomIn" data-toggle="modal" data-target="#exampleModalLong-1">
                                ZoomIn
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="zoomInUp" data-toggle="modal" data-target="#exampleModalLong-1">
                            ZoomIn (Up)
                            </button>                                        
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="zoomInLeft" data-toggle="modal" data-target="#exampleModalLong-1">
                                ZoomIn (Left)
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="zoomInRight" data-toggle="modal" data-target="#exampleModalLong-1">
                                ZoomIn (Right)
                            </button>
                            <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="rollIn" data-toggle="modal" data-target="#exampleModalLong-1">
                                RollIn
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle-1">Modal Title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Ok</button>
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
<!-- Model js -->
<script src="{{ asset('assets/js/custom/custom-model.js') }}"></script>
@endsection 