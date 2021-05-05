@extends('layouts.terminal')

@section('content')
<app :data='@json($data)'/>
@endsection
