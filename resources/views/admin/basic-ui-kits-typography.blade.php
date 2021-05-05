@section('title') 
Typography
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
                    <h5 class="card-title">Display Headings</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly more opinionated heading style.</h6>
                    <h1 class="display-1">Display 1</h1>
                    <h1 class="display-2">Display 2</h1>
                    <h1 class="display-3">Display 3</h1>
                    <h1 class="display-4">Display 4</h1>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Headings</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code class="highlighter-rouge">&lt;h6&gt;</code>, are available.</h6>
                    <h1>h1. Bootstrap heading</h1>
                    <h2>h2. Bootstrap heading</h2>
                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                </div>
            </div>
        </div>                                 
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Inline text elements</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Styling for common inline HTML5 elements.</h6>
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                    <p><u>This line of text will render as underlined</u></p>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                    <p><strong>This line rendered as bold text.</strong></p>
                    <p><em>This line rendered as italicized text.</em></p>                                
                </div>
            </div>
        </div>                                
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Blockquotes</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">For quoting blocks of content from another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</h6>
                    <blockquote class="blockquote">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Naming a source</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the source. Wrap the name of the source work in <code class="highlighter-rouge">&lt;cite&gt;</code>.</h6>
                    <blockquote class="blockquote">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Abbreviations</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Stylized implementation of HTML’s <code class="highlighter-rouge">&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.</h6>
                    <p><abbr title="attribute">attr</abbr></p>
                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Alignment</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Use text utilities as needed to change the alignment of your blockquote.</h6>
                    <blockquote class="blockquote">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                    <blockquote class="blockquote text-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                    <blockquote class="blockquote text-right">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Unordered</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">A List of Unordered Items</h6>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Ordered</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">A List of Ordered Items</h6>
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ol>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ol>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>                                
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Unstyled</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Remove the default <code class="highlighter-rouge">list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</h6>
                    <ul class="list-unstyled">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Nulla volutpat aliquam velit
                        <ul>
                          <li>Purus sodales ultricies</li>  
                          <li>Ac tristique libero volutpat at</li>
                        </ul>
                      </li>
                      <li>Faucibus porta lacus fringilla vel</li>
                      <li>Aenean sit amet erat nunc</li>
                    </ul>                                
                    <h5 class="card-title m-t-30 font-16">Inline</h5>
                    <h6 class="card-subtitle">Remove a list’s bullets and apply some light <code class="highlighter-rouge">margin</code> with a combination of two classes, <code class="highlighter-rouge">.list-inline</code> and <code class="highlighter-rouge">.list-inline-item</code>.</h6>
                    <hr>
                    <ul class="list-inline">
                      <li class="list-inline-item">Lorem ipsum</li>
                      <li class="list-inline-item">Phasellus iaculis</li>
                      <li class="list-inline-item">Nulla volutpat</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Description list alignment</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class to truncate the text with an ellipsis.</h6>
                    <dl class="row">
                      <dt class="col-sm-3">Description lists</dt>
                      <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                      <dt class="col-sm-3">Euismod</dt>
                      <dd class="col-sm-9">
                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                        <p>Donec id elit non mi porta gravida at eget metus.</p>
                      </dd>
                      <dt class="col-sm-3">Malesuada porta</dt>
                      <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                      <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                      <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                      <dt class="col-sm-3">Nesting</dt>
                      <dd class="col-sm-9">
                        <dl class="row">
                          <dt class="col-sm-4">Nested definition list</dt>
                          <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                        </dl>
                      </dd>
                    </dl>
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