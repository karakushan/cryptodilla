@section('title')
    {{ $title }}
@endsection
@extends('layouts.main')
@section('style')
    <link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('rightbar-content')
    <!-- Start Contentbar -->
    <form action="{{ route('faqs.update',$item) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="lang" value="{{ request('lang',config('app.fallback_locale')) }}">
        <div class="contentbar">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <ul class="nav nav-tabs mb-3">
                                @foreach(config('app.languages') as $lang)
                                    <li class="nav-item">
                                        <a href="{{ route('faqs.edit',['faq'=>$item->id,'lang'=>$lang]) }}"
                                           class="nav-link card-title {{ (request('lang') ?? 'en') == $lang ? 'active' :''  }}"
                                           id="{{ $lang }}-tab">{{ __('FAQ') }}  <i class="flag flag-icon flag-icon-{{str_replace('en','us',$lang)}}"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="question" class="col-sm-12 col-form-label">{{ __("Question") }}</label>
                                <div class="col-sm-12">

                                    <input type="text" name="question" class="form-control" id="question"
                                           value="{{ old('question',$item->getTranslation('question',request('lang','en'),false)) }}">
                                    @error('question')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="summernote" class="col-sm-12 col-form-label">{{ __("Answer") }}</label>
                                <div class="col-sm-12">
                                    <textarea name="answer" class="form-control"
                                              id="summernote">{!! old('answer', $item->getTranslation('answer',request('lang','en'),false)) !!}</textarea>
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
                                            <option
                                                value="{{$category->id}}" {{ $item->faq_category_id==$category->id ?'selected' :'' }}>{{ $category->title }}</option>
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
