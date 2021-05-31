@section('title')
    {{ __("Dashboard") }}
@endsection
@extends('layouts.main')
@section('style')
    <!-- Apex css -->
    <link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Slick css -->
    <link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('rightbar-content')
    <!-- Start Contentbar -->
    <div class="contentbar app">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 rounded-circle" src="assets/images/crypto/bitcoin.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mb-2">Bitcoin</h5>
                                <p class="mb-0">1 BTC = 49 USD</p>
                            </div>
                            <img class="action-bg rounded-circle" src="assets/images/crypto/1.png"
                                 alt="Generic placeholder image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 rounded-circle" src="assets/images/crypto/ethereum.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mb-2">Ethereum</h5>
                                <p class="mb-0">1 ETC = 5.69 USD</p>
                            </div>
                            <img class="action-bg rounded-circle" src="assets/images/crypto/2.png"
                                 alt="Generic placeholder image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 rounded-circle" src="assets/images/crypto/ripple.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mb-2">Ripple</h5>
                                <p class="mb-0">1 RPC = 0.96 USD</p>
                            </div>
                            <img class="action-bg rounded-circle" src="assets/images/crypto/3.png"
                                 alt="Generic placeholder image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3 rounded-circle" src="assets/images/crypto/bcc.png"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mb-2">Bitcoin Cash</h5>
                                <p class="mb-0">1 BCC = 58.85 USD</p>
                            </div>
                            <img class="action-bg rounded-circle" src="assets/images/crypto/4.png"
                                 alt="Generic placeholder image">
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
            <div class="col-lg-12 col-xl-6">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title mb-0">{{ __("User activity") }}</h5>
                            </div>
                            <div class="col-3">
                                <div class="dropdown">
                                    <button class="btn btn-link p-0 font-18 float-right" type="button"
                                            id="widgetPatientTypes" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetPatientTypes">
                                        <a class="dropdown-item font-13" href="#">Refresh</a>
                                        <a class="dropdown-item font-13" href="#">Export</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 ">
                        <user-activity-on-map
                            :activities='@json($users_activities)'
                        ></user-activity-on-map>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-12 col-xl-6">
                <div class="card m-b-30 dash-widget">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <h5 class="card-title mb-0">{{ __("Trades history") }}</h5>
                            </div>
                            <div class="col-7">
                                <ul class="nav nav-pills float-right" id="pills-earning-tab-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-month-tab-justified" data-toggle="pill"
                                           href="#pills-month-justified" role="tab" aria-selected="true">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-week-tab-justified" data-toggle="pill"
                                           href="#pills-week-justified" role="tab" aria-selected="false">Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pair</th>
                                    <th>Exchange</th>
                                    <th>User</th>
                                    <th>ID</th>
                                    <th>Price</th>
                                    <th>Q-ty</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/bitcoin_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>bitcoin.com</td>
                                    <td>johncb@gmail.com</td>
                                    <td>BCC98F59</td>
                                    <td>$598.69</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/ethereum_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>cashitnow.com</td>
                                    <td>jameson911@gmail.com</td>
                                    <td>CITN456546</td>
                                    <td>$98.65</td>
                                    <td><span class="badge badge-success-inverse">Success</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/ripple_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>miningtrend.com</td>
                                    <td>will2go@gmail.com</td>
                                    <td>MGT584@F</td>
                                    <td>$83.25</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/bcc_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>getprofit.com</td>
                                    <td>dakota@gmail.com</td>
                                    <td>BCD94F769</td>
                                    <td>$859.55</td>
                                    <td><span class="badge badge-success-inverse">Success</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/bitcoin_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>bitcoin.com</td>
                                    <td>johncb@gmail.com</td>
                                    <td>BCC98F59</td>
                                    <td>$598.69</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/ethereum_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>whatiscrypto.uk</td>
                                    <td>whatis@gmail.com</td>
                                    <td>MTB005TC</td>
                                    <td>$12.38</td>
                                    <td><span class="badge badge-success-inverse">Success</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/ripple_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>bitcoin.com</td>
                                    <td>johncb@gmail.com</td>
                                    <td>BCC98F59</td>
                                    <td>$598.69</td>
                                    <td><span class="badge badge-primary-inverse">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><img class="w-25 rounded-circle" src="assets/images/crypto/bcc_small.png"
                                             alt="Generic placeholder image"></td>
                                    <td>bitcoin.com</td>
                                    <td>johncb@gmail.com</td>
                                    <td>BCC98F59</td>
                                    <td>$598.69</td>
                                    <td><span class="badge badge-success-inverse">Success</span></td>
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
        <!-- Start row -->

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
    <script src="{{ asset('assets/js/custom/custom-dashboard-crypto.js') }}"></script>
@endsection
