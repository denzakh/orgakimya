@extends('adminlte::page')

@section('title', 'Services')

@section('content')

<div class="container">

<h1>{{ $application->title }}</h1>

{{ $application->text }}
</div>

@endsection