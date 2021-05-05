@section('title') 
Chartist Chart
@endsection 
@extends('layouts.main')
@section('style')
<!-- Chartist Chart css -->
<link href="{{ asset('assets/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Simple Line</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-simple-line" class="ct-chart ct-golden-section chartist-simple-line"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Holes in Data</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-holes-in-data" class="ct-chart ct-golden-section chartist-holes-in-data"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Filled Holes in Data</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-filled-holes-in-data" class="ct-chart ct-golden-section chartist-filled-holes-in-data"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Only Holes in Data</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-only-holes-in-data" class="ct-chart ct-golden-section chartist-only-holes-in-data"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Line Scatter Diagram with Responsive Settings</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-line-scatter-diagram" class="ct-chart ct-golden-section chartist-line-scatter-diagram"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Line Area</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-line-area" class="ct-chart ct-golden-section chartist-line-area"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bi-Polar Line Chart With Area Only</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-bi-polar-line" class="ct-chart ct-golden-section chartist-bi-polar-line"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Advanced Smil Animations</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-advanced-smil-animations" class="ct-chart ct-golden-section chartist-advanced-smil-animations"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">SVG Path Animations</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-svg-path-animations" class="ct-chart ct-golden-section chartist-svg-path-animations"></div>
                </div>
            </div>
        </div>
        <!-- End col -->                   
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Line Interpolation / Smoothing</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-line-interpolation-smoothing" class="ct-chart ct-golden-section chartist-line-interpolation-smoothing"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Series Overrides</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-series-overrides" class="ct-chart ct-golden-section chartist-series-overrides"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Bi-Polar Bar</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-bi-polar-chart" class="ct-chart ct-golden-section chartist-bi-polar-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Overlapping Bars on Moblie</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-overlapping-bars-on-moblie" class="ct-chart ct-golden-section chartist-overlapping-bars-on-moblie"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Add Peak Circles Using The Draw Events</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-add-peak-circles" class="ct-chart ct-golden-section chartist-add-peak-circles"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Multi-Line Lables</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-multi-line-lables" class="ct-chart ct-golden-section chartist-multi-line-lables"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Stacked Bar</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-stacked-bar" class="ct-chart ct-golden-section chartist-stacked-bar"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Horizontal Bar</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-horizontal-bar" class="ct-chart ct-golden-section chartist-horizontal-bar"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Extreme Responsive Configuration</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series D</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-danger"></i>Series E</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-extreme-responsive-configuration" class="ct-chart ct-golden-section chartist-extreme-responsive-configuration"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Distributed Series</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series D</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-danger"></i>Series E</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-info"></i>Series F</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-dark"></i>Series G</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-distributed-series" class="ct-chart ct-golden-section chartist-distributed-series"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Label Placement</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-label-placement" class="ct-chart ct-golden-section chartist-label-placement"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Simple Pie Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-simple-pie-chart" class="ct-chart ct-golden-section chartist-simple-pie-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Pie Chart with custom labels</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-pie-chart-with-custom-labels" class="ct-chart ct-golden-section chartist-pie-chart-with-custom-labels"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Gauge Chart</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-gauge-chart" class="ct-chart ct-golden-section chartist-gauge-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Gauge Chart Using Fill Rather Than Stroke</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-gauge-fill-rather-chart" class="ct-chart ct-golden-section chartist-gauge-fill-rather-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Animating a Donut with Svg.Animate</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-success"></i>Series D</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-danger"></i>Series E</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-info"></i>Series F</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-dark"></i>Series G</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-animating-donut-with-svg-animate" class="ct-chart ct-golden-section chartist-animating-donut-with-svg-animate"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Donut Chart Using Fill Rather Than Stroke</h5>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="chartist-donut-fill-rather-chart" class="ct-chart ct-golden-section chartist-donut-fill-rather-chart"></div>
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
<!-- Chartist Chart JS -->
<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-chart-chartistjs.js') }}"></script>
@endsection 