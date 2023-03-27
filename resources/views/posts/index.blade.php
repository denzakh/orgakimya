
    <div class="container">

        <table class="table table-striped">
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            {{ $post->published }}
                            <a href="{{ LaravelLocalization::localizeUrl('/posts').'/'.$post->id }}">@lang('Follow this link')</a>
                        </td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">
                            <h2>Данные отсутствуют</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

