
    <div class="container">

        <table class="table table-striped">
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>                            
                            <a href="{{ LaravelLocalization::localizeUrl('/posts').'/'.$post->id }}">
                               {{ $post->id }}.  {{ $post->title }}
                            </a>                            
                        </td>
                        <td>
                        </td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">
                            -
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

