@extends('adminlte::page')

@section('title', 'Edit partner')

@section('content')

<div class="container">
  <form class="form-horizontal" action="{{route('partners.update', $partner->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf 

    {{-- Form include --}}
    @include('admin.partners.partials.form', ['partner' => $partner])
    
  </form>
</div>

@endsection