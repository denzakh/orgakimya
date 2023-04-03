<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Articles') }}</h1>
            </div>

            @forelse ($articles as $article)
                <div
                    style="display: inline-block; vertical-align: top; width: 300px; margin-right: 50px; margin-bottom: 50px;">

                    <div>
                        <a href="/storage/docs/articles/{{ $article->doc }}" alt="">
                            {{ $article->title }}
                        </a> (Tr)
                    </div>
                </div>
            @empty
            @endforelse

            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
