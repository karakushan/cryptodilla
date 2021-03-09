@section('title') 
Email Compose
@endsection 
@extends('layouts.main')
@section('style')
<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
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
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">New Message</h5>
                    </div>
                    <div class="card-body">                                    
                        <form>
                            <div class="form-group row">
                                <label for="emailTo" class="col-sm-2 col-form-label">To</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="emailTo" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailCc" class="col-sm-2 col-form-label">CC</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="emailCc" placeholder="CC">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailBcc" class="col-sm-2 col-form-label">BCC</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="emailBcc" placeholder="BCC">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailSubject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="emailSubject" placeholder="Subject">
                                </div>
                            </div>                                      
                            <div class="form-group row">
                                <label for="emailSubject" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <div class="summernote">Greetings for the day from Orbiter</div>
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary-rgba my-1"><i class="feather icon-send mr-2"></i>Send</button>
                                    <button type="submit" class="btn btn-success-rgba my-1"><i class="feather icon-save mr-2"></i>Save</button>
                                    <button type="submit" class="btn btn-danger-rgba my-1"><i class="feather icon-trash mr-2"></i>Delete</button>
                                </div>
                            </div>
                        </form>
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
<!-- Summernote js -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-email.js') }}"></script>
@endsection 