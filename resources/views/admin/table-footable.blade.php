@section('title') 
Footable
@endsection 
@extends('layouts.main')
@section('style')
<!-- Footabel css --> 
<link href="{{ asset('assets/plugins/footable/css/footable.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
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
                    <h5 class="card-title">Basic</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table foo-basic-table">
                            <thead>
                                <tr>
                                    <th data-breakpoints="xs">ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th data-breakpoints="xs">Job Title</th>
                                    <th data-breakpoints="xs sm">Started On</th>
                                    <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-expanded="true">
                                    <td>1</td>
                                    <td>Dennise</td>
                                    <td>Fuhrman</td>
                                    <td>High School History Teacher</td>
                                    <td>November 8th 2011</td>
                                    <td>July 25th 1960</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Elodia</td>
                                    <td>Weisz</td>
                                    <td>Wallpaperer Helper</td>
                                    <td>October 15th 2010</td>
                                    <td>March 30th 1982</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Raeann</td>
                                    <td>Haner</td>
                                    <td>Internal Medicine Nurse Practitioner</td>
                                    <td>November 28th 2013</td>
                                    <td>February 26th 1966</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Junie</td>
                                    <td>Landa</td>
                                    <td>Offbearer</td>
                                    <td>October 31st 2010</td>
                                    <td>March 29th 1966</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Solomon</td>
                                    <td>Bittinger</td>
                                    <td>Roller Skater</td>
                                    <td>December 29th 2011</td>
                                    <td>September 22nd 1964</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Bar</td>
                                    <td>Lewis</td>
                                    <td>Clown</td>
                                    <td>November 12th 2012</td>
                                    <td>August 4th 1991</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Usha</td>
                                    <td>Leak</td>
                                    <td>Ships Electronic Warfare Officer</td>
                                    <td>August 14th 2012</td>
                                    <td>November 20th 1979</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Lorriane</td>
                                    <td>Cooke</td>
                                    <td>Technical Services Librarian</td>
                                    <td>September 21st 2010</td>
                                    <td>April 7th 1969</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Filtering</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table foo-filtering-table" data-filtering="true">
                            <thead>
                            <tr>
                                <th data-breakpoints="xs">ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th data-breakpoints="xs">Job Title</th>
                                <th data-breakpoints="xs sm">Started On</th>
                                <th data-breakpoints="xs sm md">Date of Birth</th>
                                <th data-type="html" data-breakpoints="xs sm md">Info</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dennise</td>
                                <td>Fuhrman</td>
                                <td>High School History Teacher</td>
                                <td>November 8th 2011</td>
                                <td>July 25th 1960</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Elodia</td>
                                <td>Weisz</td>
                                <td>Wallpaperer Helper</td>
                                <td>October 15th 2010</td>
                                <td>March 30th 1982</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raeann</td>
                                <td>Haner</td>
                                <td>Internal Medicine Nurse Practitioner</td>
                                <td>November 28th 2013</td>
                                <td>February 26th 1966</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Junie</td>
                                <td>Landa</td>
                                <td>Offbearer</td>
                                <td>October 31st 2010</td>
                                <td>March 29th 1966</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Solomon</td>
                                <td>Bittinger</td>
                                <td>Roller Skater</td>
                                <td>December 29th 2011</td>
                                <td>September 22nd 1964</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Bar</td>
                                <td>Lewis</td>
                                <td>Clown</td>
                                <td>November 12th 2012</td>
                                <td>August 4th 1991</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Usha</td>
                                <td>Leak</td>
                                <td>Ships Electronic Warfare Officer</td>
                                <td>August 14th 2012</td>
                                <td>November 20th 1979</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Lorriane</td>
                                <td>Cooke</td>
                                <td>Technical Services Librarian</td>
                                <td>September 21st 2010</td>
                                <td>April 7th 1969</td>
                                <td><a href="#placeholder">Info link</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col --> 
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pagination</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table foo-pagination-table" data-paging="true"></table>
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
<!-- Footable js -->
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>     
<script src="{{ asset('assets/plugins/footable/js/footable.min.js') }}"></script>     
<script src="{{ asset('assets/js/custom/custom-table-footable.js') }}"></script>
@endsection 