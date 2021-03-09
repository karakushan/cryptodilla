@section('title') 
Order List
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
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">All Orders</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelect">
                                          <option>All</option>
                                          <option>Last Week</option>
                                          <option>Last Month</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Invoice</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Warehouse</th>
                                    <th>Status</th>                                                
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#o2599</th>
                                    <td>11</td>
                                    <td>Amy Adams</td>
                                    <td>02/06/2019</td>
                                    <td>$1,95,000</td>
                                    <td>Boston</td>
                                    <td><span class="badge badge-primary-inverse">Processing</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o2600</th>
                                    <td>12</td>
                                    <td>Shiva Radharaman</td>
                                    <td>01/06/2019</td>
                                    <td>$85,000</td>
                                    <td>Washington DC</td>
                                    <td><span class="badge badge-secondary-inverse">Shipped</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o2601</th>
                                    <td>13</td>
                                    <td>Ryan Smith</td>
                                    <td>28/05/2019</td>
                                    <td>$70,000</td>
                                    <td>San Francisco</td>
                                    <td><span class="badge badge-success-inverse">Completed</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o2602</th>
                                    <td>14</td>
                                    <td>James Witherspon</td>
                                    <td>21/05/2019</td>
                                    <td>$1,25,000</td>
                                    <td>Las Vegas</td>
                                    <td><span class="badge badge-warning-inverse">Refunded</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o2603</th>
                                    <td>15</td>
                                    <td>Courney Berry</td>
                                    <td>17/05/2019</td>
                                    <td>$1,30,000</td>
                                    <td>Los Angeles</td>
                                    <td><span class="badge badge-danger-inverse">Cancelled</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o2604</th>
                                    <td>16</td>
                                    <td>Lisa Perry</td>
                                    <td>12/05/2019</td>
                                    <td>$1,50,000</td>
                                    <td>Chicago</td>
                                    <td><span class="badge badge-info-inverse">Delivered</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#o2605</th>
                                    <td>17</td>
                                    <td>John Doe</td>
                                    <td>01/05/2019</td>
                                    <td>$5,000</td>
                                    <td>New York</td>
                                    <td><span class="badge badge-success-inverse">Completed</span></td>
                                    <td>
                                        <div class="button-list">
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-primary-rgba"><i class="feather icon-file"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            <a href="{{url('/page-order-detail')}}" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                        </div>
                                    </td>
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

@endsection 