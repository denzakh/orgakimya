@extends('adminlte::page')

@section('title', 'Edit post')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('posts.update', $post->id)}}" method="post"  enctype="multipart/form-data">
    @method('PUT')
    @csrf

    {{-- Form include --}}
    @include('admin.posts.partials.form', ['post' => $post])
    
  </form>
</div>

@endsection