@extends('adminlte::page')

@section('title', 'Edit article')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('articles.update', $article->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf 

    {{-- Form include --}}
    @include('admin.articles.partials.form', ['article' => $article])
    
  </form>
</div>

@endsection