@extends('adminlte::page')

@section('title', 'Create service')

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.services.partials.form')

        </form>
    </div>

@endsection
