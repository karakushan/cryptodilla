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
    <form action="{{ route('exchanges.update',$item) }}" method="post">
        @csrf
        @method('PUT')
        <div class="contentbar">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-8 col-xl-9">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">{{ $title }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-12 col-form-label">{{ __("Название") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="{{ old('name',isset($item) && isset($item->name) ? $item->name : '') }}">
                                    @error('name')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug" class="col-sm-12 col-form-label">{{ __("Слаг") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="slug" class="form-control" id="slug"
                                           value="{{ old('slug',isset($item) && isset($item->slug) ? $item->slug : '') }}">
                                    @error('slug')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-12 col-form-label">{{ __("Описание") }}</label>
                                <div class="col-sm-12">
                                    <textarea name="description" class="form-control" id="description">{!!old('description',isset($item) && isset($item->description) ? $item->description : '')  !!}</textarea>
                                    @error('slug')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="user-address" class="col-sm-12 col-form-label">{{ __("Статус") }}</label>
                                <div class="col-sm-12">
                                    <input name="status" type="checkbox" class="js-switch"
                                           value="1" {{  $item->status ? 'checked':''  }} />
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-lg btn-primary"><i
                                        class="feather icon-send mr-2"></i>
                                    {{ __("Сохранить") }}
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
                            <h5 class="card-title">{{ __("Логотип") }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="app">
                                <filepond value="{{ $item->logo }}" name="logo"/>
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
    <!-- Dropzone js -->
    <script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
@endsection
