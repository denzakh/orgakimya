@extends('adminlte::page')

@section('title', 'Edit settings')

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{ route('settings.update', 1) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            @foreach ($settings as $inputName => $inputValue)
                <div style="display: inline-block; width: 300px; padding-right: 20px; margin-bottom: 10px;">
                    <label for="">{{ $inputName }}</label>
                    <input type="text" class="form-control" name="{{ $inputName }}" placeholder=""
                        value="{{ $inputValue }}">
                </div>
            @endforeach


        </form>
    </div>

@endsection
