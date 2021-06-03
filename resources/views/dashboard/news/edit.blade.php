@section('title')
    {{ $title }}
@endsection
@extends('layouts.main')
@section('style')
    <link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('rightbar-content')
    <!-- Start Contentbar -->
    <form action="{{ route('news.update',$item) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="lang" value="{{ request('lang',config('app.fallback_locale')) }}">
        <div class="contentbar">

            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-8 col-xl-9">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <ul class="nav nav-tabs mb-3">
                                @foreach(config('app.languages') as $lang)
                                    <li class="nav-item">
                                        <a href="{{ route('news.edit',['news'=>$item->id,'lang'=>$lang]) }}"
                                           class="nav-link card-title {{ request('lang',config('app.fallback_locale')) == $lang ? 'active' :''  }}"
                                           id="{{ $lang }}-tab">{{ $title }}  <i class="flag flag-icon flag-icon-{{str_replace('en','us',$lang)}}"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="question" class="col-sm-12 col-form-label">{{ __("Title") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="title" class="form-control" id="question"
                                           value="{{ old('title',$item->getTranslation('title',request('lang',config('app.fallback_locale')),false)) }}">
                                    @error('title')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-sm-12 col-form-label">{{ __("Content") }}</label>
                                <div class="col-sm-12">
                                    <textarea name="content" class="form-control"
                                              id="summernote">{!! old('content', $item->getTranslation('content',request('lang',config('app.fallback_locale')),false)) !!}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="faq_category_id"
                                       class="col-sm-12 col-form-label">{{ __("Category") }}</label>
                                <div class="col-sm-12">
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="0">{{ __("Please select") }}</option>
                                        @foreach ($categories as $category)
                                            <option
                                                value="{{$category->id}}" {{ $category->id==$item->category_id?'selected':''  }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-lg btn-primary"><i
                                        class="feather icon-send mr-2"></i>
                                    {{ __("Save") }}
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End col -->

                <!-- Start col -->
                <div class="col-lg-4 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">{{ __("Thumbnail") }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="app">
                                <filepond value="{{ $item->thumbnail }}" name="thumbnail"/>
                            </div>
                            {{--<div class="text-center m-t-15">
                                <button type="button" class="btn btn-primary">Upload File</button>
                            </div>--}}
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
