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
    <form action="{{ route('news-category.update',$item) }}" method="post">
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
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="{{ old('title',$item->title) }}">
                                    @error('title')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug" class="col-sm-12 col-form-label">{{ __("Slug") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="slug" class="form-control" id="title"
                                           value="{{ old('slug',$item->slug) }}">
                                    @error('slug')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-12 col-form-label">{{ __("Description") }}</label>
                                <div class="col-sm-12">
                                    <textarea type="text" name="description" class="form-control" id="description"
                                              value="{{ old('description','') }}">{!! $item->description !!}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
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
