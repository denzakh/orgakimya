<x-layout>
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="padding-bottom: 30px;">{{ __('Menu: Articles') }}</h1>

        @forelse ($articles as $article)
            <div style="display: inline-block; vertical-align: top; width: 300px; margin-right: 50px; margin-bottom: 50px;">

                <div>
                    <a href="/storage/docs/articles/{{ $article->doc }}" alt="">
                        {{ $article->title }}
                    </a> (Tr)
                </div>

                
            </div>
        @empty
        @endforelse
    </div>
</x-layout>
