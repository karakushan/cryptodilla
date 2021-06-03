@section('title')
    {{ $title }}
@endsection
@extends('layouts.main')
@section('style')
    <link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('rightbar-content')
    <!-- Start Contentbar -->
    <form action="{{ route('faqs.store') }}" method="post">
        @csrf
        @method('POST')
        <input type="hidden" name="lang" value="{{ request('lang',config('app.fallback_locale')) }}">
        <div class="contentbar">


            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                           <div class="card-title">{{ __('FAQ') }}  <i class="flag flag-icon flag-icon-{{str_replace('en','us',config('app.fallback_locale'))}}"></i></div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="question" class="col-sm-12 col-form-label">{{ __("Question") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="question" class="form-control" id="question"
                                           value="{{ old('question','') }}">
                                    @error('question')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="summernote"  class="col-sm-12 col-form-label">{{ __("Answer") }}</label>
                                <div class="col-sm-12">
                                    <textarea name="answer" class="form-control"
                                             id="summernote">{!! old('answer', '') !!}</textarea>
                                    @error('answer')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="faq_category_id"
                                       class="col-sm-12 col-form-label">{{ __("Category") }}</label>
                                <div class="col-sm-12">
                                    <select name="faq_category_id" id="faq_category_id" class="form-control">
                                        <option value="0">{{ __("Please select") }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-lg btn-primary"><i
                                        class="feather icon-send mr-2"></i>
                                    {{ __("Добавить") }}
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End col -->

            </div>
            <!-- End row -->

        </div>
    </form>
    <!-- End Contentbar -->
@endsection
@section('script')
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        /* -- Form Editors - Summernote -- */
        $('#summernote').summernote({
            height: 320,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
    </script>
@endsection
