h@php
    
@endphp





<x-layout>
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="padding-bottom: 30px;">{{ __('Menu: Article') }}</h1>

        @forelse ($articles as $article)
            <div style="display: inline-block; vertical-align: top; max-width: 300px; margin-right: 50px; margin-bottom: 50px;">

                {!! get_picture_th('article', $article['img']) !!}


                <h2>{{ $article->title }} </h2>

                <div>
                    {{ $article->text }}
                </div>
            </div>

        @empty
        @endforelse
    </div>
</x-layout>
