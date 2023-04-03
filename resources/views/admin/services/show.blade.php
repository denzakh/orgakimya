@extends('adminlte::page')

@section('title', 'Services')

@section('content')

    <div class="container">

        <h1>{{ $service->title }}</h1>

        {{ $service->text }}
    </div>

@endsection
