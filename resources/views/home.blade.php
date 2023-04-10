@php

$ln = LaravelLocalization::getCurrentLocale();
$titleKey = 'title_'.$ln;
$title = $page[$titleKey];
$descriptionKey = 'description_'.$ln;
$description = $page[$descriptionKey];

@endphp

<x-layout :title="$title" :description="$description">
    <div class="container">
        <div class="page">
            <div class="page__title page__title--one">
                <h1>{{ __('Waste Water Treatment and Reuse') }}</h1>
            </div>

            <h2>{{ __('Menu: Applications') }}</h2>
            @forelse ($applications as $application)
                {{ $application->title }}<br/>
            @empty
            @endforelse

            <h2>{{ __('Menu: Services') }}</h2>
            @forelse ($services as $service)
                {{ $service->title }}<br/>
            @empty
            @endforelse

            <h2>{{ __('Menu: Posts') }}</h2>
            @forelse ($posts as $post)
                {{ $post->title }}<br/>
            @empty
            @endforelse


                <div class="content-standart">
                	111
                </div>

            </div>

            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>

    


