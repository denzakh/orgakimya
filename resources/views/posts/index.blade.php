<x-layout>
    <div class="container">
        <h1>{{ __('Menu: Posts') }}</h1>

        @forelse ($posts as $post)
            <div>
                <h2>
                    {{ $post->title }}
                </h2>

                <div>
                    {{ $post->text }}
                </div>

                {!! get_picture_th('posts', $post['img']) !!}
            </div>
        @empty
        @endforelse
    </div>
</x-layout>
