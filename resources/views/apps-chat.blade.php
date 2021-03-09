@section('title') 
Chat
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
        <div class="col-lg-5 col-xl-4">
            <div class="chat-list">
                <div class="chat-search">
                    <form>
                        <div class="input-group">
                          <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                          <div class="input-group-append">
                            <button class="btn" type="submit" id="button-addon3"><i class="feather icon-search"></i></button>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="chat-user-list">
                    <ul class="list-unstyled mb-0">
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Amy Adams<span class="badge badge-success ml-2">1</span> <span class="timing">Jan 22</span></h5>
                                <p>Admin</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>James Simmy<span class="badge badge-success ml-2">2</span> <span class="timing">Feb 15</span></h5>
                                <p>HR Executive</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/men.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Mark Wither<span class="badge badge-success ml-2">3</span> <span class="timing">Mar 03</span></h5>
                                <p>Manager</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/women.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Steve Jason<span class="badge badge-success ml-2">1</span> <span class="timing">Jan 22</span></h5>
                                <p>Data Analyst</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Brad Pitt<span class="badge badge-success ml-2">2</span> <span class="timing">Feb 15</span></h5>
                                <p>Actor</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Will Smith<span class="badge badge-success ml-2">3</span> <span class="timing">Mar 03</span></h5>
                                <p>Product Manager</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/men.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Courtney Doe<span class="badge badge-success ml-2">1</span> <span class="timing">Jan 22</span></h5>
                                <p>PHP Developer</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/women.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Jenni Wills<span class="badge badge-success ml-2">2</span> <span class="timing">Feb 15</span></h5>
                                <p>HR Executive</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Sam Peterson<span class="badge badge-success ml-2">3</span> <span class="timing">Mar 03</span></h5>
                                <p>Marketing Head</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Amy Adams<span class="badge badge-success ml-2">1</span> <span class="timing">Jan 22</span></h5>
                                <p>Admin</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                       
        <div class="col-lg-7 col-xl-8">       
            <div class="chat-detail">
                <div class="chat-head">
                    <ul class="list-unstyled mb-0">
                        <li class="media">
                            <img class="align-self-center mr-3 rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="font-18">Amy Adams</h5>
                                <p class="mb-0">typing...</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chat-body">
                    <div class="chat-day text-center mb-3">
                        <span class="badge badge-secondary">Today</span>
                    </div>                                
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>Hello! please, let me know the status about project after school.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>I have completed 4 stages 5 stages remaining.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>I request you to schedule demo at 3 pm after 2 days for the better progress.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:25 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>Sure, I will prepare for the same.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:27 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>Great. Thanks</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:30 pm<i class="feather icon-clock ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>I have completed 4 stages 5 stages remaining.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>I request you to schedule demo at 3 pm after 2 days for the better progress.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:25 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-left">
                        <div class="chat-message-text">
                            <span>Sure, I will prepare for the same.</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:27 pm<i class="feather icon-check ml-2"></i></span>
                        </div>
                    </div>
                    <div class="chat-message chat-message-right">
                        <div class="chat-message-text">
                            <span>Great. Thanks</span>
                        </div>
                        <div class="chat-message-meta">
                            <span>4:30 pm<i class="feather icon-clock ml-2"></i></span>
                        </div>
                    </div>
                </div>
                <div class="chat-bottom">
                    <div class="chat-messagebar">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-secondary-rgba" type="button" id="button-addonmic"><i class="feather icon-mic"></i></button>
                                </div>  
                                <input type="text" class="form-control" placeholder="Type a message..." aria-label="Text">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary-rgba" type="submit" id="button-addonlink"><i class="feather icon-link"></i></button>
                                    <button class="btn btn-primary-rgba" type="button" id="button-addonsend"><i class="feather icon-send"></i></button>
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
<!-- End contentbar -->
@endsection 
@section('script')
<!-- Chat js -->
<script src="{{ asset('assets/js/custom/custom-chat.js') }}"></script>
@endsection 