@extends('adminlte::page')

@section('title', 'Posts')

@section('content')

    <div class="container">
        <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create
            post</a>

        <table class="table table-striped">
            <thead>
                <th>Наименование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title_en }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-success">Edit</a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="Post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            <h2>Данные отсутствуют</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
