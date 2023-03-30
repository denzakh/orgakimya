@extends('adminlte::page')

@section('title', 'Article')

@section('content')

<div class="container">

<h1>{{ $article->title }}</h1>

{{ $article->text }}
</div>

@endsection