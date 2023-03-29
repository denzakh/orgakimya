@extends('adminlte::page')

@section('title', 'Edit service')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('services.update', $service->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf 

    {{-- Form include --}}
    @include('admin.services.partials.form', ['service' => $service])
    
  </form>
</div>

@endsection