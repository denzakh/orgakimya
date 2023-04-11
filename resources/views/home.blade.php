@php
    $seo = get_seo(1);
    $lng = LaravelLocalization::getCurrentLocale();
    $tel = $mdsettings['phone1'];
    $telUrl = preg_replace('![^0-9]+!', '', $tel);
    $email = $mdsettings['email1'];
@endphp
<x-layout :title="$seo['title']" :description="$seo['description']">

    <svg class="hidden">
        <defs>
            <symbol id="icon-recycling" viewBox="30 60 190 190" title="icon-recycling" desc="">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M108.82 147.57C105.25 147.57 94.92 147.23 87.33 146.97L86.89 155.54L63.89 138.35L88.5 125.35L88 134.44L106.45 133.44L102.27 126.91L107.9 110.27L120.54 132.56C120.54 132.56 120.09 147.57 108.82 147.57ZM76.82 101.83L84.95 97.6799L73.95 80.7399L68.95 88.3599L53.41 90.9999L66 68.8899C66 68.8899 79.87 63.5199 84.83 71.5399C86.77 74.6499 92.23 84.7699 96.07 91.9999L103.72 88.0999L100.35 116.64L76.82 101.83ZM61.66 94.9999L60.66 122.81L52.97 117.81L44.11 135L54.56 134.91L65.29 147.47H37.91C37.91 147.47 25.51 139.47 30.78 129.83C32.52 126.68 38.24 117.56 42.4 110.96L35.25 106.32L61.66 94.9999Z"
                    fill="" />
            </symbol>
            <symbol id="icon-snowflake" viewBox="0 0 32 32" title="icon-snowflake" desc="">
                <path
                    d="M28.285 16.575l-4.475 2.49-5.309-3.065 5.305-3.063 4.487 2.488c0.173 0.099 0.38 0.157 0.601 0.157 0.001 0 0.002 0 0.003 0h-0c0.001 0 0.002 0 0.003 0 0.69 0 1.249-0.559 1.249-1.249 0-0.468-0.258-0.876-0.639-1.090l-0.006-0.003-3.174-1.759 2.42-1.397c0.377-0.22 0.625-0.623 0.625-1.083 0-0.691-0.56-1.25-1.25-1.25-0.23 0-0.446 0.062-0.631 0.171l0.006-0.003-2.418 1.396 0.058-3.625c0-0.006 0-0.013 0-0.020 0-0.684-0.549-1.239-1.23-1.25h-0.001c-0.684 0.007-1.24 0.549-1.269 1.227l-0 0.003-0.082 5.124-5.308 3.065v-6.127l4.4-2.636c0.366-0.222 0.607-0.619 0.607-1.072 0-0.69-0.56-1.25-1.25-1.25-0.237 0-0.459 0.066-0.648 0.181l0.006-0.003-3.115 1.866v-2.794c0-0.69-0.56-1.25-1.25-1.25s-1.25 0.56-1.25 1.25v0 2.792l-3.106-1.866c-0.183-0.111-0.404-0.176-0.64-0.176-0.69 0-1.25 0.56-1.25 1.25 0 0.451 0.239 0.846 0.597 1.066l0.005 0.003 4.394 2.639v6.128l-5.306-3.064-0.083-5.126c-0.028-0.682-0.585-1.224-1.27-1.229h-0.001c-0.682 0.012-1.23 0.567-1.23 1.25 0 0.007 0 0.014 0 0.021v-0.001l0.059 3.628-2.418-1.396c-0.179-0.105-0.395-0.167-0.625-0.167-0.691 0-1.25 0.56-1.25 1.25 0 0.46 0.249 0.863 0.619 1.080l0.006 0.003 2.418 1.396-3.172 1.758c-0.388 0.217-0.646 0.626-0.646 1.095 0 0.69 0.56 1.25 1.25 1.25 0.224 0 0.434-0.059 0.616-0.162l-0.006 0.003 4.484-2.486 5.306 3.063-5.306 3.063-4.483-2.493c-0.175-0.099-0.384-0.157-0.607-0.157-0.691 0-1.25 0.56-1.25 1.25 0 0.467 0.257 0.875 0.637 1.090l0.006 0.003 3.175 1.764-2.421 1.398c-0.381 0.219-0.633 0.623-0.633 1.087 0 0.69 0.559 1.25 1.25 1.25 0.234 0 0.452-0.064 0.639-0.176l-0.006 0.003 2.418-1.396-0.063 3.624c-0 0.006-0 0.014-0 0.021 0 0.683 0.548 1.238 1.228 1.251l0.001 0h0.021c0 0 0 0 0 0 0.683 0 1.238-0.547 1.25-1.227v-0.001l0.089-5.125 5.305-3.063v6.124l-4.397 2.642c-0.366 0.223-0.607 0.619-0.607 1.072 0 0.691 0.56 1.251 1.251 1.251 0.238 0 0.46-0.066 0.649-0.181l-0.006 0.003 3.11-1.869v2.792c0 0.69 0.56 1.25 1.25 1.25s1.25-0.56 1.25-1.25v0-2.792l3.111 1.864c0.182 0.112 0.403 0.178 0.639 0.178 0.001 0 0.001 0 0.002 0h-0c0.001 0 0.001 0 0.002 0 0.69 0 1.25-0.56 1.25-1.25 0-0.453-0.241-0.85-0.602-1.069l-0.006-0.003-4.396-2.634v-6.129l5.303 3.062 0.089 5.131c0.012 0.681 0.566 1.229 1.249 1.229 0 0 0.001 0 0.001 0h0.021c0.681-0.012 1.229-0.567 1.229-1.25 0-0.008-0-0.015-0-0.023l0 0.001-0.063-3.63 2.421 1.397c0.177 0.102 0.39 0.163 0.616 0.163 0.69 0 1.25-0.559 1.25-1.25 0-0.456-0.245-0.856-0.61-1.074l-0.006-0.003-2.418-1.396 3.168-1.762c0.384-0.218 0.639-0.625 0.639-1.090 0-0.69-0.56-1.25-1.25-1.25-0.222 0-0.43 0.058-0.61 0.159l0.006-0.003z">
                </path>
            </symbol>
            <symbol id="icon-drop" viewBox="-40 0 512 512" title="icon-drop" desc="">
                <path
                    d="M170.119434,7.10542736e-15 L204.773382,37.9140093 L232.862996,69.0528903 L247.665579,85.7024895 L265.015621,105.5376 L272.669784,114.444537 L285.940901,130.243125 L294.115233,140.333376 L298.719332,146.224969 C332.953167,190.823735 348.741952,247.415646 335.715414,299.662237 C316.639677,376.17084 247.895879,429.140402 169.758386,429.074978 L169.758386,429.074978 L163.950478,428.968915 C88.5349332,426.271414 23.075063,373.974216 4.5470056,299.662237 C-8.48369509,247.398951 7.30173587,190.790811 41.5491001,146.217139 L41.5491001,146.217139 L48.7161669,137.126874 L57.4043039,126.532512 L71.3602238,110.05957 L83.6101872,95.9389492 L97.3920742,80.2999168 L112.709141,63.1381777 L135.525581,37.8797806 L170.119434,7.10542736e-15 Z M170.118277,63.2382337 L144.749864,91.3175391 L125.013984,113.466883 L104.184497,137.326074 L90.6023423,153.339316 L79.7673683,166.60924 L75.3824188,172.21235 C48.5282246,207.163654 36.3479426,250.843368 45.9462899,289.340236 C59.8428233,345.076187 108.948411,384.307622 165.085876,386.319141 L165.085876,386.319141 L170.148532,386.411136 C228.439195,386.457923 280.00945,346.721192 294.316129,289.340236 C303.91031,250.86008 291.725454,207.185768 264.873988,172.20452 L264.873988,172.20452 L260.468445,166.570993 L252.555653,156.818327 L243.080232,145.506431 L228.020917,128.005478 L214.911368,113.071224 L195.017757,90.755249 L170.118277,63.2382337 Z M255.45161,258.374234 C255.45161,305.5209 217.264943,343.707567 170.118277,343.707567 L170.118277,343.707567 L170.118277,301.0409 C193.584943,301.0409 212.784943,281.8409 212.784943,258.374234 L212.784943,258.374234 Z">
                </path>
            </symbol>
        </defs>
    </svg>

    <div class="container">
        <div class="page home content-standart">
            <div class="page__title page__title--one">
                <!-- <h1>{{ __('Waste Water Treatment and Reuse') }}</h1> -->
            </div>

            @if (LaravelLocalization::getCurrentLocale() === 'en')
                <div class="home_promo">
                    <p><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.about') }}">Orga
                            Kimya</a> is a Turkish company specializing in the treatment of wastewater, extracting
                        useful substances from it, protection of heat exchange systems from corrosion.</p>
                    <p>The introduction of modern technologies allows <a
                            href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.about') }}#partner">our
                            customers</a> to significantly save on consumables, extend the service life of technical
                        systems and meet the requirements of environmental legislation.</p>
                </div>
            @endif

            @if (LaravelLocalization::getCurrentLocale() === 'tr')
                <div class="home_promo home_promo--tr">
                    <p><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.about') }}">Orga
                            Kimya</a>, atık suyun arıtılması ve atık sudan yararlı maddeler çıkarılması konusunda
                        uzmanlaşmış bir Türk şirketidir. , ısı değişim sistemlerinin korozyondan korunması.</p>
                    <p>Modern teknolojilerin kullanıma sunulması, <a
                            href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.about') }}#partner">müşterilerimizin</a>
                        sarf malzemelerinden önemli ölçüde tasarruf etmesine, teknik sistemlerin hizmet ömrünü ve çevre
                        mevzuatının gerekliliklerini karşılar.</p>
                </div>
            @endif

            @if (LaravelLocalization::getCurrentLocale() === 'ru')
                <div class="home__promo">
                    <p><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.about') }}">Orga
                            Kimya</a> — турецкая компания, специализирующаяся на очистке сточных вод, извлечением из них
                        полезных веществ, защите систем теплообмена от корозии.</p>
                    <p>Внедрение современных технологий позволяет <a
                            href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.about') }}#partner">нашим
                            клиентам</a> существенно экономить на расходных материалах, продлить срок службы технических
                        систем и соответствовать требованиям экологического законодательства.</p>
                </div>
            @endif

        </div>

        <div class="home__rotate">
            <div class="page home content-standart">

                <h2 class="home__figure"><a
                        href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.services') }}">{{ __('Menu: Services') }}</a>
                </h2>
                @if (LaravelLocalization::getCurrentLocale() === 'en')
                    <p>We provide laboratory services for water analysis for the presence of any substances.<br> We
                        provide consultations:</p>
                @endif

                @if (LaravelLocalization::getCurrentLocale() === 'tr')
                    <p>Herhangi bir maddenin varlığına yönelik su analizi için laboratuvar hizmetleri sağlıyoruz.<br>
                        Danışmanlık hizmeti veriyoruz:</p>
                @endif

                @if (LaravelLocalization::getCurrentLocale() === 'ru')
                    <p>Мы оказываем лабораторные услуги по анализу воды на наличие любых веществ.<br> Проводим
                        консультации:</p>
                @endif

                <div class="home__s-list">
                    <div class="home__s-item home__s-item--recycling">
                        <div class="home__s-icon-box">
                            <div class="home__item-icon">
                                <svg class="home__icon-recycling">
                                    <use href="#icon-recycling" width="100" height="100" fill=""></use>
                                </svg>
                            </div>
                        </div>
                        <div class="home__s-text-box">
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                for the implementation and operation of chemical conditioning for wastewater treatment
                                and water recovery systems
                            @endif

                            @if (LaravelLocalization::getCurrentLocale() === 'tr')
                                atık su arıtma ve su geri kazanım sistemleri için kimyasal şartlandırmanın uygulanması
                                ve işletilmesi için
                            @endif

                            @if (LaravelLocalization::getCurrentLocale() === 'ru')
                                по внедрению и эксплуатации химического кондиционирования для систем очистки сточных вод
                                и рекуперации воды
                            @endif

                        </div>
                    </div>
                    <div class="home__s-item home__s-item--snowflake">
                        <div class="home__s-icon-box">
                            <div class="home__item-icon">
                                <svg class="home__icon-snowflake">
                                    <use href="#icon-snowflake" width="50" height="50" fill=""></use>
                                </svg>
                            </div>
                        </div>
                        <div class="home__s-text-box">
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                on the use of chemical conditioning in cooling and heating systems
                            @endif

                            @if (LaravelLocalization::getCurrentLocale() === 'tr')
                                soğutma ve ısıtma sistemlerinde kimyasal şartlandırmanın kullanımı hakkında
                            @endif

                            @if (LaravelLocalization::getCurrentLocale() === 'ru')
                                по применению химического кондиционирования в системах охлаждения и отопления
                            @endif

                        </div>
                    </div>
                    <div class="home__s-item home__s-item--drop">
                        <div class="home__s-icon-box">
                            <div class="home__item-icon">
                                <svg class="home__icon-drop">
                                    <use href="#icon-drop" width="60" height="60" fill=""></use>
                                </svg>
                            </div>
                        </div>
                        <div class="home__s-text-box">
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                on water resources management in production
                            @endif

                            @if (LaravelLocalization::getCurrentLocale() === 'tr')
                                üretimde su kaynakları yönetimi konusunda
                            @endif

                            @if (LaravelLocalization::getCurrentLocale() === 'ru')
                                по управлению водными ресурсами на производстве
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="home__applications">
                <div class="home__slide-img-box">

                    {!! get_picture_ad([
                        'catalog' => 'design',
                        'img' => 'slide-1-' . $lng,
                        'sizes' => [
                            'wide-sz' => 1280,
                            'desktop-sz' => 1100,
                            'tab-sz' => 640,
                            'mob-sz' => 320,
                        ],
                        'exe' => 'jpg',
                        'isLazy' => false,
                        'alt' => '',
                    ]) !!}
                </div>

                <div class="page content-standart">
                    <h2 class="home__figure"><a
                            href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.services') }}">{{ __('Menu: Applications') }}</a>
                    </h2>

                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                        <p>We cooperate with leading manufacturers of environmental solutions and use the most modern
                            technologies:</p>
                    @endif

                    @if (LaravelLocalization::getCurrentLocale() === 'tr')
                        <p>Önde gelen çevre çözümleri üreticileriyle işbirliği yapıyoruz ve en modern teknolojileri
                            kullanıyoruz:</p>
                    @endif

                    @if (LaravelLocalization::getCurrentLocale() === 'ru')
                        <p>Мы сотрудничаем с ведущими производителями экологических решений и используем самые
                            современные технологии:</p>
                    @endif

                    <ul>
                        @forelse ($applications as $application)
                            <li>{{ $application->title }}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <div class="page home content-standart">
            @if (LaravelLocalization::getCurrentLocale() === 'en')
                <h2 class="home__figure"><a
                        href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.contacts') }}">Contact
                        Us</a></h2>
                <p>
                    Call <a href="tel:+{{ $telUrl }}" class="" rel="noopener"
                        aria-label="{{ __('Phone') }}">
                        {{ $tel }}
                    </a> or send email <a href="mailto:{{ $email }}" class="" rel="noopener"
                        aria-label="{{ __('Email') }}">
                        {{ $email }}
                    </a>
                </p>
                <p>We will come to your property upon request. Departure of specialists abroad is possible.</p>
            @endif

            @if (LaravelLocalization::getCurrentLocale() === 'tr')
                <h2 class="home__figure"><a
                        href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.contacts') }}">Bize
                        Ulaşın</a></h2>
                <p>
                    Numaralı telefonu arayın <a href="tel:+{{ $telUrl }}" class="" rel="noopener"
                        aria-label="{{ __('Phone') }}">
                        {{ $tel }}
                    </a> veya postaya e-posta gönder <a href="mailto:{{ $email }}" class="" rel="noopener"
                        aria-label="{{ __('Email') }}">
                        {{ $email }}
                    </a>
                </p>
                <p>İstek üzerine mülkünüze geleceğiz. Uzmanların yurt dışına gitmesi mümkündür.</p>
            @endif

            @if (LaravelLocalization::getCurrentLocale() === 'ru')
                <h2 class="home__figure"><a
                        href="{{ LaravelLocalization::getURLFromRouteNameTranslated($lng, 'routes.contacts') }}">Свяжитесь
                        с нами</a></h2>
                <p>
                    Позвоните <a href="tel:+{{ $telUrl }}" class="" rel="noopener"
                        aria-label="{{ __('Phone') }}">
                        {{ $tel }}
                    </a> или напишите на email <a href="mailto:{{ $email }}" class="" rel="noopener"
                        aria-label="{{ __('Email') }}">
                        {{ $email }}
                    </a>
                </p>
                <p>Приедем на ваш объект по запросу. Возможен выезд специалистов за границу.</p>
            @endif

            <div class="page__bottom"></div>
        </div>
    </div>
</x-layout>
