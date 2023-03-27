@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        <a href="{{ route('admin.news') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать
            категорию</a>
        <table class="table table-striped">
            <thead>
                <th>Наименование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
                @forelse ($data as $news)
                    <tr>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->published }}</td>
                        <td>
                            <a href="{{ route('admin.news.edit', ['id' => $news->id]) }}"><i class="fa fa-edit"></i></a>
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
