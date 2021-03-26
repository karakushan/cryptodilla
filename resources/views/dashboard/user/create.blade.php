@section('title')
    {{ __("Создание пользователя") }}
@endsection
@extends('layouts.main')
@section('style')
    <!-- Dropzone css -->
    <link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('rightbar-content')
    <!-- Start Contentbar -->
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @method('POST')
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-8 col-xl-9">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">{{ __("Данные пользователя") }}</h5>
                    </div>
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="user-name" class="col-sm-12 col-form-label">{{ __("Имя") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="user-name"
                                           placeholder="{{ __("Имя") }}"
                                           value="{{ old('name',isset($user) && isset($user->name) ? $user->name : '') }}">
                                    @error('name')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user-phone"
                                       class="col-sm-12 col-form-label">{{ __("Номер телефона") }}</label>
                                <div class="col-sm-12">
                                    <input type="tel" name="phone" class="form-control" id="user-phone"
                                           placeholder="{{ __("Номер телефона") }}"
                                           value="{{ old('phone',isset($user) && isset($user->phone) ? $user->phone : '') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user-email" class="col-sm-12 col-form-label">{{ __("E-mail") }}</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" id="user-email"
                                           placeholder="{{ __("E-mail") }}"
                                           value="{{ old('email',isset($user) && isset($user->email) ? $user->email : '') }}">
                                    @error('email')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user-password" class="col-sm-12 col-form-label">{{ __("Пароль") }}</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" class="form-control" id="user-password"
                                           placeholder="{{ __("Пароль") }}"
                                           value="">
                                    @error('password')
                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user-country" class="col-sm-12 col-form-label">{{ __("Страна") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="country" class="form-control" id="user-country"
                                           placeholder="{{ __("Страна") }}"
                                           value="{{ old('country',isset($user) && isset($user->country) ? $user->country : '') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user-city" class="col-sm-12 col-form-label">{{ __("Город") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="city" class="form-control" id="user-city"
                                           placeholder="{{ __("Город") }}"
                                           value="{{ old('city',isset($user) && isset($user->city) ? $user->city : '') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user-address" class="col-sm-12 col-form-label">{{ __("Адрес") }}</label>
                                <div class="col-sm-12">
                                    <input type="text" name="address" class="form-control" id="user-address"
                                           placeholder="{{ __("Адрес") }}"
                                           value="{{ old('address',isset($user) && isset($user->address) ? $user->address : '') }}">
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
                        <h5 class="card-title">{{ __("Аватар") }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="app">
                            <filepond name="avatar"/>
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
