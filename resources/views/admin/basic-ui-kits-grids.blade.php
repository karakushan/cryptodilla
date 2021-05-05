@section('title') 
Grids
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start cow -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Grid options</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">While Bootstrap uses <code class="highlighter-rouge">em</code>s or <code class="highlighter-rouge">rem</code>s for defining most sizes, <code class="highlighter-rouge">px</code>s are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size. See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">
                                    Extra small<br>
                                    <small>&lt;576px</small>
                                    </th>
                                    <th class="text-center">
                                    Small<br>
                                    <small>≥576px</small>
                                    </th>
                                    <th class="text-center">
                                    Medium<br>
                                    <small>≥768px</small>
                                    </th>
                                    <th class="text-center">
                                    Large<br>
                                    <small>≥992px</small>
                                    </th>
                                    <th class="text-center">
                                    Extra large<br>
                                    <small>≥1200px</small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-nowrap" scope="row">Max container width</th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                    <td><code>.col-</code></td>
                                    <td><code>.col-sm-</code></td>
                                    <td><code>.col-md-</code></td>
                                    <td><code>.col-lg-</code></td>
                                    <td><code>.col-xl-</code></td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row"># of columns</th>
                                    <td colspan="5">12</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                    <td colspan="5">30px (15px on each side of a column)</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Nestable</th>
                                    <td colspan="5">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                    <td colspan="5">Yes</td>
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
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Grid Example</h5>
                </div>
                <div class="card-body">    
                    <h6 class="card-subtitle">Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns within any <code>.row</code>.</h6>                            
                    <div class="example-row">
                        <div class="grid-example">
                            <div class="row">
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>
                                <div class="col-sm-1">.col-sm-1</div>                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-2">.col-sm-2</div>
                                <div class="col-sm-2">.col-sm-2</div>
                                <div class="col-sm-2">.col-sm-2</div>
                                <div class="col-sm-2">.col-sm-2</div>
                                <div class="col-sm-2">.col-sm-2</div>
                                <div class="col-sm-2">.col-sm-2</div>                                   
                            </div>
                            <div class="row">
                                <div class="col-sm-3">.col-sm-3</div>
                                <div class="col-sm-3">.col-sm-3</div>
                                <div class="col-sm-3">.col-sm-3</div>
                                <div class="col-sm-3">.col-sm-3</div>                                  
                            </div>
                            <div class="row">
                                <div class="col-sm-4">.col-sm-4</div>
                                <div class="col-sm-4">.col-sm-4</div>
                                <div class="col-sm-4">.col-sm-4</div>                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">.col-sm-6</div>
                                <div class="col-sm-6">.col-sm-6</div>                              
                            </div>
                            <div class="row">
                                <div class="col-sm-12">.col-sm-12</div>                            
                            </div>
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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Variable width content</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use <code class="highlighter-rouge">col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content.</h6>
                    <div class="example-row">
                        <div class="grid-example">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                  1 of 3
                                </div>
                                <div class="col-md-auto">
                                  Variable width content
                                </div>
                                <div class="col col-lg-2">
                                  3 of 3
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  1 of 3
                                </div>
                                <div class="col-md-auto">
                                  Variable width content
                                </div>
                                <div class="col col-lg-2">
                                  3 of 3
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
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Reordering</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use <code class="highlighter-rouge">.order-</code> classes for controlling the <strong>visual order</strong> of your content. These classes are responsive, so you can set the <code class="highlighter-rouge">order</code> by breakpoint (e.g., <code class="highlighter-rouge">.order-1.order-md-2</code>). Includes support for <code class="highlighter-rouge">1</code> through <code class="highlighter-rouge">12</code> across all five grid tiers.</h6>
                    <div class="example-row m-b-30">
                        <div class="grid-example">
                             <div class="row">
                                <div class="col">
                                  First, but unordered
                                </div>
                                <div class="col order-12">
                                  Second, but last
                                </div>
                                <div class="col order-1">
                                  Third, but first
                                </div>
                              </div>                                                    
                        </div>
                    </div>
                    <h6 class="card-subtitle">There are also responsive <code class="highlighter-rouge">.order-first</code> and <code class="highlighter-rouge">.order-last</code> classes that change the <code class="highlighter-rouge">order</code> of an element by applying <code class="highlighter-rouge">order: -1</code> and <code class="highlighter-rouge">order: 13</code> (<code class="highlighter-rouge">order: $columns + 1</code>), respectively. These classes can also be intermixed with the numbered <code class="highlighter-rouge">.order-*</code> classes as needed.</h6>
                    <div class="example-row">
                        <div class="grid-example">
                             <div class="row">
                                <div class="col order-last">
                                  First, but last
                                </div>
                                <div class="col">
                                  Second, but unordered
                                </div>
                                <div class="col order-first">
                                  Third, but first
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
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->    
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Offsetting columns</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Move columns to the right using <code class="highlighter-rouge">.offset-md-*</code> classes. These classes increase the left margin of a column by <code class="highlighter-rouge">*</code> columns. For example, <code class="highlighter-rouge">.offset-md-4</code> moves <code class="highlighter-rouge">.col-md-4</code> over four columns.</h6>
                    <div class="example-row m-b-30">
                        <div class="grid-example">
                            <div class="row">
                              <div class="col-md-4">.col-md-4</div>
                              <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                            </div>
                            <div class="row">
                              <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                              <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                            </div>                                                   
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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Nesting</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">To nest your content with the default grid, add a new <code class="highlighter-rouge">.row</code> and set of <code class="highlighter-rouge">.col-sm-*</code> columns within an existing <code class="highlighter-rouge">.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</h6>
                    <div class="example-row m-b-30">
                        <div class="grid-example">
                            <div class="row">
                              <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                  <div class="col-8 col-sm-6">
                                    Level 2: .col-8 .col-sm-6
                                  </div>
                                  <div class="col-4 col-sm-6">
                                    Level 2: .col-4 .col-sm-6
                                  </div>
                                </div>
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
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Horizontal alignment</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use flexbox alignment utilities to vertically and horizontally align columns.</h6>
                    <div class="example-row">
                        <div class="grid-example">
                            <div class="row justify-content-start">
                                <div class="col-4">
                                  One of two columns
                                </div>
                                <div class="col-4">
                                  One of two columns
                                </div>
                              </div>
                              <div class="row justify-content-center">
                                <div class="col-4">
                                  One of two columns
                                </div>
                                <div class="col-4">
                                  One of two columns
                                </div>
                              </div>
                              <div class="row justify-content-end">
                                <div class="col-4">
                                  One of two columns
                                </div>
                                <div class="col-4">
                                  One of two columns
                                </div>
                              </div>
                              <div class="row justify-content-around">
                                <div class="col-4">
                                  One of two columns
                                </div>
                                <div class="col-4">
                                  One of two columns
                                </div>
                              </div>
                              <div class="row justify-content-between">
                                <div class="col-4">
                                  One of two columns
                                </div>
                                <div class="col-4">
                                  One of two columns
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
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Vertical alignment</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use flexbox alignment utilities to vertically and horizontally align columns.</h6>
                    <div class="example-row example-row-flex-cols">
                        <div class="grid-example">
                            <div class="row align-items-start">
                                <div class="col">
                                  One of three columns
                                </div>
                                <div class="col">
                                  One of three columns
                                </div>
                                <div class="col">
                                  One of three columns
                                </div>
                              </div>
                            <div class="row align-items-center">
                                <div class="col">
                                  One of three columns
                                </div>
                                <div class="col">
                                  One of three columns
                                </div>
                                <div class="col">
                                  One of three columns
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col">
                                  One of three columns
                                </div>
                                <div class="col">
                                  One of three columns
                                </div>
                                <div class="col">
                                  One of three columns
                                </div>
                            </div>
                            <div class="row">
                                <div class="col align-self-start">
                                  One of three columns
                                </div>
                                <div class="col align-self-center">
                                  One of three columns
                                </div>
                                <div class="col align-self-end">
                                  One of three columns
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