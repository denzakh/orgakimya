@php
    
@endphp


<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Applications') }}</h1>
            </div>

            @forelse ($applications as $application)
                <div
                    style="display: inline-block; vertical-align: top; max-width: 300px; margin-right: 50px; margin-bottom: 50px;">


                    {!! get_picture_th([
                        'catalog' => 'applications/thumbnail/',
                        'img' => $application['img'],
                        'exe' => 'png',
                        'alt' => $application->title,
                    ]) !!}


                    <a href="{{ LaravelLocalization::transRoute('routes.applications') }}/{{ $application->id }}"
                        alt="{{ $application->title }}">
                        {{ $application->title }}
                    </a>

                </div>

            @empty
            @endforelse
        </div>
    </div>
</x-layout>
