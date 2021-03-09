@section('title') 
Kanban Board
@endsection 
@extends('layouts.main')
@section('style')
<!-- Dragula css -->
<link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row"> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Todo</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-one">
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-primary-inverse font-14">Urgent</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton1">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Update address in the Contact Us page</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>5</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/boy.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">                                        
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-success-inverse font-14">Revision</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton2">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Create wireframes for upcoming web development project</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>8</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-danger-inverse font-14">Project Team</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton3">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Create final draft for Live Podcast Strategy, along with initial presentation.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>2</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-info-inverse font-14">Accounts</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton4">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Process Form 16 of the Employees for Income Tax Return.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>2</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Task</button>
                </div>
            </div>
        </div> 
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">In Progress</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-two">
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-success-inverse font-14">Update_02</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton5">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Finish Testing of Live App for Smart Home.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>5</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/boy.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-primary-inverse font-14">Core Team</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton6">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Provide white papers for New Payment System.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>8</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">
                            <img class="card-img-top" src="assets/images/ui-cards/ui-cards-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-danger-inverse font-14">Product</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton7">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Change in angle of few photos from Photoshoot No.5</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>2</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Task</button>
                </div>
            </div>
        </div> 
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">In Review</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-three">
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-primary-inverse font-14">Outing Proposal</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton8">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Get budget approved with Sam for Saturday Company outing.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>5</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/boy.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">
                            <img class="card-img-top" src="assets/images/ui-cards/ui-cards-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-success-inverse font-14">Product Video</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton9">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Upload New Commercial Video for online promotions.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>8</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-secondary-inverse font-14">Reminder</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton10">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Update slider images on www.theta.com for New Event.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>2</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Task</button>
                </div>
            </div>
        </div> 
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Completed</h5>
                </div>
                <div class="card-body">
                    <div id="kanban-board-four">
                        <div class="card border m-b-20">
                            <img class="card-img-top" src="assets/images/ui-cards/ui-cards-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-primary-inverse font-14">Retouch</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton11">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Product #985, #987 need to be retouched for reflection settings.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>5</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/boy.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-20">                                        
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-success-inverse font-14">Social Media</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton12">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Create carousel ad set for latest product.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>8</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border m-b-15">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="kanban-tag">
                                            <span class="badge badge-danger-inverse font-14">Urgent</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="kanban-menu">
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton13">
                                                    <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="font-16 my-3">Finish testing for Social Media 3.0 web app.</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="kanban-comment">
                                            <span class="font-14"><i class="feather icon-message-circle mr-2"></i>2</span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="kanban-users">
                                            <div class="avatar-group">
                                                <div class="avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                        <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Task</button>
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
<!-- Dragula js -->
<script src="{{ asset('assets/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-kanban.js') }}"></script>
@endsection 