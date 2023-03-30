@extends('adminlte::page')

@section('title', 'Partners')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@section('content')

    <div class="container">
        <a href="{{ route('partners.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create
            partner</a>

        <table class="table table-striped">
            <thead>
                <th>N</th>
                <th>Title</th>
                <th class="text-right">Actions</th>
            </thead>
            <tbody>
                @forelse ($partners as $partner)
                    <tr>
                        <td>{{ $partner->id }}</td>
                        <td>{{ $partner->title }}</td>
                        <td style="min-width: 160px;">
                            <a href="{{ route('partners.edit', $partner) }}" class="btn btn-success">Edit</a>

                            <form action="{{ route('partners.destroy', $partner->id) }}" method="Service" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            <h2>Empty</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
