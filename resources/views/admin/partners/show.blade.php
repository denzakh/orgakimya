@extends('adminlte::page')

@section('title', 'Article')

@section('content')

    <div class="container">

        <h1>{{ $partner->title }}</h1>

        {{ $partner->text }}
    </div>

@endsection
