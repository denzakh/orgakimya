@extends('adminlte::page')

@section('title', 'Create post')

@section('content')

<div class="container">

  <form class="form-horizontal" action="{{route('posts.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.posts.partials.form')
    
  </form>
</div>

@endsection