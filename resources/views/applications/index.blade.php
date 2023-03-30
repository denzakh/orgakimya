@php
    
@endphp


<x-layout>
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="padding-bottom: 30px;">{{ __('Menu: Applications') }}</h1>

        @forelse ($applications as $application)
            <div style="display: inline-block; vertical-align: top; max-width: 300px; margin-right: 50px; margin-bottom: 50px;">

                {!! get_picture_th('applications/thumbnail/', $application['img']) !!}


                <a href="{{ LaravelLocalization::transRoute('routes.applications') }}/{{ $application->id }}" alt="{{ $application->title }}">
                    {{ $application->title }}
                </a>

            </div>

        @empty
        @endforelse
    </div>
</x-layout>
