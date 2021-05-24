@section('title')
    {{ $title }}
@endsection
@extends('layouts.main')
@section('style')
    <!-- Dropzone css -->
    <link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('rightbar-content')
    <!-- Start Contentbar -->
    <form action="{{ route('news.update',$item) }}" method="post">
        @csrf
        @method('PUT')
        <div class="contentbar">

            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">{{ $title }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="question" class="col-sm-12 col-form-label">{{ __("Title") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="title" class="form-control" id="question"
                                           value="{{ old('title',$item->title) }}">
                                    @error('title')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-sm-12 col-form-label">{{ __("Content") }}</label>
                                <div class="col-sm-12">
                                    <textarea  name="content" class="form-control" id="content">{!! old('content', $item->content) !!}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="faq_category_id" class="col-sm-12 col-form-label">{{ __("Category") }}</label>
                                <div class="col-sm-12">
                                    <select name="category_id" id="category_id" class="form-control">
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
    <!-- Dropzone js -->
    <script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
@endsection
