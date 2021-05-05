@section('title') 
Editable
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
                    <h5 class="card-title">Edit with button</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email ID</th>
                                <th>Phone</th>                                                   
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>CEO</td>
                                  <td>demo@example.com</td>
                                  <td>9898989898</td>                               
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Larry</td>
                                  <td>Manager</td>
                                  <td>demo@example.com</td>
                                  <td>9797979797</td>                                 
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>John</td>
                                  <td>Employee</td>
                                  <td>demo@example.com</td>
                                  <td>9696969696</td>                                 
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
                    <h5 class="card-title">Edit with click</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Inline edit like a spreadsheet on two columns only and without identifier column.</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-click">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email ID</th>
                                    <th>Phone</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>CEO</td>
                                  <td>demo@example.com</td>
                                  <td>9898989898</td>                               
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Larry</td>
                                  <td>Manager</td>
                                  <td>demo@example.com</td>
                                  <td>9797979797</td>                                 
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>John</td>
                                  <td>Employee</td>
                                  <td>demo@example.com</td>
                                  <td>9696969696</td>                                 
                              </tr>
                            </tbody>
                        </table>
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
<!-- Tabledit js -->
<script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>     
<script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script>
@endsection 