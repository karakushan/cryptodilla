@section('title')
    {{ __("Список пользователей") }}
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
                                <h5 class="card-title mb-0">{{ __("Пользователи") }}</h5>
                            </div>
                            <div class="col-6">
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
                                    <th>Аватар</th>
                                    <th>Имя</th>
                                    <th>E-mail</th>
                                    <th>Роль</th>
                                    <th>Дата регистрации</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>

                                            <img src="{{ Storage::url('public/'.$user->avatar) }}" class="img-fluid" width="35"
                                                 alt="product">
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ 'Трейдер' }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <div class="button-list">
                                                <a href="{{ route('users.edit',$user) }}" class="btn btn-success-rgba"><i
                                                        class="feather icon-edit-2"></i></a>
                                              {{--  <a href="{{url('/page-product-detail')}}" class="btn btn-danger-rgba"><i
                                                        class="feather icon-trash"></i></a>--}}
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
