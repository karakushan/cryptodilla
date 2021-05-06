@extends('layouts.dashboard-terminal')

@section('content')
    <app :data='@json($data)'/>
@endsection
