<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Applications') }}</h1>
            </div>
            <div class="applications__main">
                <div class="applications__list">
                    @forelse ($applications as $application)
                        <section class="applications__card">
                            <h2 class="visually-hidden">{{ $application->title }}</h2>
                            <div class="applications__img-box">
                                {!! get_picture_th([
                                    'catalog' => 'applications/thumbnail',
                                    'img' => $application['img'],
                                    'exe' => 'png',
                                    'alt' => $application->title,
                                ]) !!}
                            </div>
                            <div class="applications__card-title-row">
                                <a href="{{ LaravelLocalization::transRoute('routes.applications') }}/{{ $application->id }}"
                                    class="applications__card-link">
                                    {{ $application->title }}
                                </a>
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
