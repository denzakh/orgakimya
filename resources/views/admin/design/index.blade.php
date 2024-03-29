@extends('adminlte::page')

@section('title', 'Upload design img')

@section('content_header')
    <h1>Upload Design Image</h1>
@stop

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{ route('design.save') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="pt-2">
                Save as original
                <div class="form-group">
                    <input type="file" name="file-img-orig" placeholder="">
                </div>
            </div>

            <div class="pt-2">
                Sized image
                <div class="form-group">
                    <input type="file" name="file-img-sized" placeholder="">
                </div>
            </div>

            <div class="pt-2">
                Croped image
                <div class="form-group">
                    <input type="file" name="file-img-croped" placeholder="">
                </div>
            </div>

            <div class="pt-4 pb-4">
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>

        </form>
    </div>

@endsection
