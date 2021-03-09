@section('title') 
Email Open
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
        <div class="col-lg-3">
            <div class="email-leftbar">
                <div class="card m-b-30">
                    <div class="card-header text-center">
                        <a href="{{url('/apps-email-compose')}}" class="btn btn-danger-rgba btn-lg btn-block py-2 px-0 font-18"><i class="feather icon-plus mr-2"></i>Compose</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{url('/apps-email-inbox')}}" class="active"><i class="feather icon-inbox mr-2"></i>Inbox</a>
                            <span class="badge badge-primary-inverse text-primary">9</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-star mr-2"></i>Starred</a>
                            <span class="badge badge-secondary-inverse">2</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-clock mr-2"></i>Snoozed</a>
                            <span class="badge badge-secondary-inverse">3</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-send mr-2"></i>Sent</a>
                            <span class="badge badge-secondary-inverse">4</span>                                        
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-file mr-2"></i>Drafts</a>
                            <span class="badge badge-secondary-inverse">5</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-award mr-2"></i>Important</a>
                            <span class="badge badge-secondary-inverse">6</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-alert-octagon mr-2"></i>Spam</a>
                            <span class="badge badge-secondary-inverse">7</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#"><i class="feather icon-trash mr-2"></i>Trash</a>
                            <span class="badge badge-secondary-inverse">8</span>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-9">
            <div class="email-rightbar">
                <div class="card email-open-box m-b-30">
                    <div class="card-header">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><h5 class="mt-2 mb-0">Save your ideas about Business Trip</h5></li>
                            <li class="list-inline-item float-right"><a href="#"><i class="feather icon-folder font-20"></i></a></li>
                            <li class="list-inline-item float-right"><a href="#"><i class="feather icon-printer font-20"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">                                    
                        <div class="row m-b-30">
                            <div class="col-md-5">
                                <div class="media">
                                  <img class="align-self-center mr-3" src="assets/images/users/men.svg" alt="Generic placeholder image">
                                  <div class="media-body">
                                    <h6 class="mt-0">John Doe</h6>
                                    <p class="text-muted mb-0">johndoe@email.com</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="open-email-head">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">25 July, 2019, 1:05 PM</li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-star font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-corner-up-left font-20"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="feather icon-more-vertical- font-20"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mt-0">Welcome to here</h6>
                                <p class="text-muted">Hi,</p>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="text-muted">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="text-muted">Thank You.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="./assets/images/email/file-attached-1.jpg" alt="Generic placeholder image">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-secondary-rgba">Download</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="./assets/images/email/file-attached-2.jpg" alt="Generic placeholder image">
                                    <div class="card-body text-center">
                                    <button type="button" class="btn btn-secondary-rgba">Download</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="open-email-footer">
                            
                            <div class="row text-right">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary-rgba my-1"><i class="feather icon-corner-up-left mr-2"></i>Reply</button>
                                    <button type="button" class="btn btn-success-rgba my-1">Forward<i class="feather icon-corner-up-right ml-2"></i></button>
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