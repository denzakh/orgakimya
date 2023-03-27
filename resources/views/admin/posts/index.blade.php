@extends('adminlte::page')

@section('title', 'Posts')

@section('content')

<div class="container">
  <hr>

  <a href="" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a>

  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr>
          <td>{{$post->title}}</td>
          <td>{{$post->text}}</td>
          <td>
            <a href=""><i class="fa fa-edit"></i></a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection