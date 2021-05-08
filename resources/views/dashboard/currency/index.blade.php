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
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __("Лого") }}</th>
                                    <th>{{ __("Название") }}</th>
                                    <th>{{ __("Слаг") }}</th>
                                    <th>{{ __("Дата добавления") }}</th>
                                    <th>{{ __("Статус") }}</th>
                                    <th>{{ __("Действие") }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            @if ($item->logo)
                                                <img src="{{ Storage::url('public/'.$item->logo) }}"
                                                     class="img-fluid rounded-circle" width="66" height="66"
                                                     alt="{{$item->name}}">
                                            @else
                                                <img src="{{ asset('assets/images/users/profile.svg') }}"
                                                     class="img-fluid rounded-circle" alt="profile" width="66"
                                                     height="66">
                                            @endif
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{!! $item->status_text !!}</td>
                                        <td>
                                            <div class="button-list">
                                                <a href="{{ route('currencies.edit',$item) }}"
                                                   title="{{ __('Изменить данные') }}"
                                                   class="btn btn-success-rgba"><i
                                                        class="feather icon-edit-2"></i></a>
                                                <form title="{{ __('Удалить') }}"
                                                      onsubmit="return confirm('{{ __('Вы точно намерены это сделать?') }}');"
                                                      action="{{ route('currencies.destroy',$item) }}" method="post"
                                                      style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger-rgba"><i
                                                            class="feather icon-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
