@extends('layouts.dashboard-terminal')

@push('head')
    <script>
        var appData=@json($data);
    </script>
@endpush

@section('content')
    <app/>
@endsection
