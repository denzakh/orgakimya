@extends('adminlte::page')

@section('title', 'Create application')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('applications.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.applications.partials.form')
    
  </form>
</div>

@endsection