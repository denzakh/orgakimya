<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1 style="padding-bottom: 30px;">{{ __('Menu: Services') }}</h1>
            </div>
            @forelse ($services as $service)
                <div
                    style="display: inline-block; vertical-align: top; max-width: 300px; margin-right: 50px; margin-bottom: 50px;">

                    {!! get_picture_th([
                        'catalog' => 'services/thumbnail/',
                        'img' => $service['img'],
                        'alt' => $service->title,
                    ]) !!}


                    <h2>{{ $service->title }} </h2>

                    <div>
                        {{ $service->text }}
                    </div>
                </div>

            @empty
            @endforelse

            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
