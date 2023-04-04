<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Services') }}</h1>
            </div>
            <div class="services__main">
                <div class="services__list">
                    @forelse ($services as $service)
                        <section class="services__card">
                            <div class="services__img-box">
                                {!! get_picture_th([
                                    'catalog' => 'services/thumbnail',
                                    'img' => $service['img'],
                                    'alt' => $service->title,
                                ]) !!}
                            </div>
                            <div class="services__card-title-row">
                                <h2 class="services__card-title">{{ $service->title }} </h2>
                            </div>
                            <div class="services__card-text">
                                {{ $service->text }}
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
