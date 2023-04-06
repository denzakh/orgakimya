<x-layout>
    <div class="container">
        <div class="page">
            <div class="page__title page__title--one">
                <h1>{{ $application->title }}</h1>
            </div>
            <div class="application__main">
                <div class="application__img-box">
                    {!! get_picture_ad([
                        'catalog' => 'applications',
                        'img' => $application['img'],
                        'exe' => 'jpg',
                        'alt' => $application->title,
                        'sizes' => [
                            'normal' => 1200,
                            'normal' => 640,
                            'thumbnail' => 320,
                        ],
                    ]) !!}
                </div>
                <div class="application__text content-standart">{!! $application->text !!}</div>
            </div>
            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
