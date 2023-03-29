@extends('adminlte::page')

@section('title', 'Upload Image')

@section('content_header')
    <h1>Upload Image</h1>
@stop

  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

@section('content')

<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('admin/save') }}" >
        	@csrf
                   
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Выбрать изображение" id="image">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                </div>
            </div>     
        </form>
    </div>
 </div>

@endsection
