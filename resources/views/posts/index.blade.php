<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Posts') }}</h1>
            </div>
            <div class="posts__main">
                <div class="posts__list">
                    @forelse ($posts as $post)
                        <section class="posts__card">
                            <div class="posts__card-title-row">
                                <h2 class="posts__card-title">{{ $post->title }} </h2>
                            </div>
                            <div class="posts__card-row">
                                <div class="posts__img-box">
                                    {!! get_picture_th([
                                        'catalog' => 'posts/thumbnail',
                                        'img' => $post['img'],
                                        'ext' => 'png',
                                        'alt' => $post->title,
                                    ]) !!}
                                </div>
                                <div class="posts__content">

                                    <div class="posts__card-text">
                                        {{ $post->text }}
                                    </div>
                                </div>
                            </div>
                        </section>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
