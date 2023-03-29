@php
    
@endphp





<x-layout>
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
        <h1 style="padding-bottom: 30px;">{{ __('Menu: Services') }}</h1>

        @forelse ($services as $service)
            <div style="display: inline-block; vertical-align: top; max-width: 300px; margin-right: 50px; margin-bottom: 50px;">

                {!! get_picture_th('services', $service['img']) !!}


                <h2>{{ $service->title }} </h2>

                <div>
                    {{ $service->text }}
                </div>
            </div>

        @empty
        @endforelse
    </div>
</x-layout>
