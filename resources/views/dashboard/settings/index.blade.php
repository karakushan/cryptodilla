@section('title')
    {{ $title }}
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
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title mb-0">{{ $title }}</h5>
                            </div>
                            <div class="col-6 d-none">
                                <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item">
                                        <div class="form-group mb-0 amount-spent-select">
                                            <select class="form-control" id="formControlSelect">
                                                <option>All</option>
                                                <option>Last Week</option>
                                                <option>Last Month</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.update',['setting'=>request('group','base')]) }}"
                              method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="group" value="{{ request('group','base') }}">
                            @foreach(config('settings.'.request('group','base').'.fields') as $key=>$field)
                                <x-dynamic-component :component="$field['component']" :name="$key" :value="$settings[$key] ?? ''" :label="$field['label']" />
                            @endforeach
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">{{ __('Save') }}</button>
                            </div>
                        </form>
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
