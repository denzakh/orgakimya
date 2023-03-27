@extends('adminlte::page')

@section('title', 'Posts')

@section('content')

<div class="container">

<h1>{{ $post->title }}</h1>

{{ $post->text }}
</div>

@endsection