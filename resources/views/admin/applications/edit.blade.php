@extends('adminlte::page')

@section('title', 'Edit application')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('applications.update', $application->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf 

    {{-- Form include --}}
    @include('admin.applications.partials.form', ['application' => $application])
    
  </form>
</div>

@endsection