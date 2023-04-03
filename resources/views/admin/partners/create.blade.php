@extends('adminlte::page')

@section('title', 'Create partner')

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{ route('partners.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.partners.partials.form')

        </form>
    </div>

@endsection
