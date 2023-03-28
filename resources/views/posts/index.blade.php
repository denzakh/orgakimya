<x-layout>
    <div class="container">
        <h1>{{ __('Menu: Posts') }}</h1>

        @forelse ($posts as $post)
            <div>
                <h2>
                    <a href="{{ LaravelLocalization::localizeUrl('/posts').'/'.$post->id }}">
                       {{ $post->title }}
                    </a>  
                </h2>

                <div>
                    {{ $post->text }}
                </div>                        
            </div>                        
        @empty

        @endforelse
    </div>
</x-layout>



