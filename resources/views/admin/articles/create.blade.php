@extends('adminlte::page')

@section('title', 'Create article')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.articles.partials.form')
    
  </form>
</div>

@endsection