<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Posts') }}</h1>
            </div>

            @forelse ($posts as $post)
                <div>
                    <h2>
                        {{ $post->title }}
                    </h2>

                    <div>
                        {{ $post->text }}
                    </div>

                    {!! get_picture_th([
                        'catalog' => 'posts/thumbnail/',
                        'img' => $post['img'],
                        'exe' => 'png',
                        'alt' => $post->title,
                    ]) !!}
                </div>
            @empty
            @endforelse

            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
