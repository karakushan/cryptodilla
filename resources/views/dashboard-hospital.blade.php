@section('title') 
Hospital
@endsection 
@extends('layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">              
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Patient Types</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetPatientTypes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetPatientTypes">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 pl-0 pr-2">
                    <div id="apex-basic-column-chart"></div>
                </div>
            </div>            
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Appointments</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetAppointment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetAppointment">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body appointment-widget">
                    <h3>235</h3>
                    <p>Total This Week</p>
                    <ul class="list-unstyled py-3">
                        <li><i class="mdi mdi-circle text-primary mr-2"></i> Website</li>
                        <li><i class="mdi mdi-circle text-success mr-2"></i> Phone Call</li>
                        <li><i class="mdi mdi-circle text-light mr-2"></i> App</li>
                    </ul>
                    <div class="row align-items-end">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary">Export Report <i class="feather icon-file ml-2"></i></button>
                        </div>
                        <div class="col-6">
                            <p class="bg-icon"><i class="feather icon-calendar"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Hospital Expense</h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 pr-0">
                            <h4 class="mb-3">$95</h4>
                            <p class="font-15 mb-0"><span class="badge badge-success"><i class="feather icon-arrow-up mr-1"></i>25%</span></p>
                        </div>
                        <div class="col-8">
                            <div id="apex-hospital-expense-chart"></div>
                        </div>
                    </div>                                
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">Pharmacy Expense</h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 pr-0">
                            <h4 class="mb-3">$23</h4>
                            <p class="font-16 mb-0"><span class="badge badge-warning"><i class="feather icon-arrow-down mr-1"></i>12%</span></p>
                        </div>
                        <div class="col-8">
                            <div id="apex-pharmacy-expense-chart"></div>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
        <!-- End col --> 
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Department Stats</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetDepartment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetDepartment">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Doctors</th>
                                    <th>Surgeries</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Orthopaedics</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <td>Pediatrics</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>Maternity</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>Oncology</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Dental</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>87</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Best Doctors</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetBestDoctors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetBestDoctors">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 rounded-circle" src="assets/images/users/men.svg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Dr. Shriram Ramesh<span class="badge badge-warning-inverse float-right font-14">4.5</span></h5>
                            <p class="mb-0">M.D. (Medicines), M.S. (Gynecology)</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="mr-3 rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Dr. Andrew Garfield<span class="badge badge-warning-inverse float-right font-14">4.0</span></h5>
                            <p class="mb-0">Internist, Pharmacy Care Doctor</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" src="assets/images/users/women.svg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Dr. Naomi Wattson<span class="badge badge-warning-inverse float-right font-14">3.5</span></h5>
                            <p class="mb-0">Oncology of Obstetrician</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="mr-3 rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Dr. Mark Wahlberg<span class="badge badge-warning-inverse float-right font-14">3.0</span></h5>
                            <p class="mb-0">Chief of the Neurosurgery</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Notifications</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetNotifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetNotifications">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Amy Ahuja transfered<span class="float-right text-muted font-11 mt-1">02:39 pm</span></h5>
                            <p class="mb-0">Room no. 405 has been alotted on...</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Received Supply<span class="float-right text-muted font-11 mt-1">10:23 pm</span></h5>
                            <p class="mb-0">We have received monthly supply.</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Dr. Shriram is on leave<span class="float-right text-muted font-11 mt-1">04:51 pm</span></h5>
                            <p class="mb-0">Do not schedule appointment for...</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <span class="mr-3 action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                            <div class="media-body">
                            <h5 class="mt-0 mb-1 font-16">Surgery Successful<span class="float-right text-muted font-11 mt-1">05:12 pm</span></h5>
                            <p class="mb-0">Jessica Meir has been recovered after...</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End col --> 
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Patients Status</h5>
                        </div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetPatientStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetPatientStatus">
                                    <a class="dropdown-item font-13" href="#">Refresh</a>
                                    <a class="dropdown-item font-13" href="#">Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Admitted On</th>
                                    <th>Disease</th>
                                    <th>Assigned Doctor</th>
                                    <th>Recovery Stats</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Amy Ahuja</td>
                                    <td>23-Oct-19</td>
                                    <td><span class="badge badge-secondary-inverse">Joandice</span></td>
                                    <td>Dr. Andrew Garfield</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vicky Malhotra</td>
                                    <td>15-Sep-19</td>
                                    <td><span class="badge badge-secondary-inverse">Accident</span></td>
                                    <td>Dr. Mark Wahlberg</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Simon Cowell</td>
                                    <td>05-Aug-19</td>
                                    <td><span class="badge badge-secondary-inverse">Fever</span></td>
                                    <td>Dr. Naomi Wattson</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Andy Murphy</td>
                                    <td>18-Jul-19</td>
                                    <td><span class="badge badge-secondary-inverse">Dengue</span></td>
                                    <td>Dr. Jeniffer Will</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jessica Meir</td>
                                    <td>11-Jun-19</td>
                                    <td><span class="badge badge-secondary-inverse">Pregnancy</span></td>
                                    <td>Dr. Shriram Ramesh</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Will Patison</td>
                                    <td>20-Apr-19</td>
                                    <td><span class="badge badge-secondary-inverse">Cancer</span></td>
                                    <td>Dr. Lauren Gotbil</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Courtney Cox</td>
                                    <td>22-Mar-19</td>
                                    <td><span class="badge badge-secondary-inverse">Paralysis</span></td>
                                    <td>Dr. Vladimir Jeir</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Paul Taylor</td>
                                    <td>03-Feb-19</td>
                                    <td><span class="badge badge-secondary-inverse">vomit</span></td>
                                    <td>Dr. Sansa Smith</td>
                                    <td>
                                        <div class="progress" style="height: 4px;">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-primary mr-2"><i class="feather icon-edit-2"></i></a>
                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>      
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title text-center mb-0">Operations Status</h5>
                </div>
                <div class="card-body">
                    <div id="apex-operation-status-chart"></div>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6 border-right">
                            <p class="my-2"><span class="font-18 f-w-6 text-primary">170</span></p>
                        </div>
                        <div class="col-6">
                            <p class="my-2">See All</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="blog-slider">
                    <div class="blog-slider-item">
                        <img class="card-img-top" src="assets/images/blog/blog_slide_01.jpg" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-secondary mb-3">NEWS</span>
                            <h5 class="card-title font-18">New Vaccine Invented</h5>
                            <p class="card-text mb-0"> vaccines protecting against rotavirus, rubella and inactivated poliovirus vaccine (IPV) will be made available to all children...</p>
                        </div> 
                    </div>
                    <div class="blog-slider-item">
                        <img class="card-img-top" src="assets/images/blog/blog_slide_02.jpg" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-secondary mb-3">SURVEY</span>
                            <h5 class="card-title font-18">Not All Heart Failure Patients Get Same Level of Care</h5>
                            <p class="card-text mb-0">  If you're black or Hispanic and hospitalized for heart failure, new research...</p>
                        </div> 
                    </div>
                    <div class="blog-slider-item">
                        <img class="card-img-top" src="assets/images/blog/blog_slide_03.jpg" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-secondary mb-3">IDEA</span>
                            <h5 class="card-title font-18">Health Care Price Transparency</h5>
                            <p class="card-text mb-0"> To reduce health care costs, private sector employers must demand that health care providers reveal their hidden pricing...</p>
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
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/js/custom/custom-dashboard-hospital.js') }}"></script>
@endsection 