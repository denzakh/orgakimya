@php
    $tel = $mdsettings['phone1'];
    $telUrl = preg_replace('![^0-9]+!', '', $tel);
    $email = $mdsettings['email1'];
    $isNotHomePage = !(url()->current() === url()->to('/'));
    
    $locArr = LaravelLocalization::getSupportedLanguagesKeys();
@endphp


<header class="header">
    @include('layouts.svg')

    <div class="header__inner">
        <div class="header__row">
            <div class="header__logo-col">
                @if ($isNotHomePage)
                    <a href="/{{ Lang::locale() }}" class="header__logo-link">
                @endif
                <div class="header__logo-box no-mobile">
                    {!! get_picture_th([
                        'catalog' => 'design',
                        'img' => 'logo-header-200',
                        'ext' => 'png',
                        'isLazy' => false,
                        'alt' => 'Logo',
                        'width' => '200',
                        'height' => '200',
                    ]) !!}
                </div>
                <span class="header__logo-box-mobile only-mobile">
                    Orga Kimya
                </span>
                @if ($isNotHomePage)
                    </a>
                @endif
            </div>
            <div class="header__top-col">
                <div class="header__contact">
                    <div class="header__r-item">
                        <span class="no-mobile">Tel: </span>
                        <a href="tel:+{{ $telUrl }}" class="header__tel" rel="noopener"
                            aria-label="{{ __('Phone') }}">

                            <span class="no-mobile">{{ $tel }}</span>
                            <span class="only-mobile-ib">
                                <svg class="header__icon-link header__icon-link--tel">
                                    <use href="#icon-tel" width="40" height="37" fill=""></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="header__r-item">
                        <span class="no-mobile">Email: </span>
                        <a href="mailto:{{ $email }}" class="header__email" rel="noopener"
                            aria-label="{{ __('Email') }}">
                            <span class="no-mobile">{{ $email }}</span>
                            <span class="only-mobile-ib">
                                <svg class="header__icon-link header__icon-link--email">
                                    <use href="#icon-email" width="34" height="35" fill=""></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__nav-col js-nav">
                <div class="header__nav-btn-wrap only-mobile">
                    <div class="header__nav-btn-box">
                        <button class="js-nav-btn header__nav-btn" type="button" aria-label="Open mobile menu">
                            <svg class="burger-svg" width="40" height="40">
                                <use href="#icon-burger" fill=""></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="header__nav-box">
                    @include('layouts.nav')
                </div>
            </div>
            <div class="header__r-col">
                <div class="header__lng js-lng">
                    <div class="header__lng-switch only-mobile">
                        <button type="button" class="header__lng-btn js-lng-btn" type="button"
                            aria-label="Open language menu">
                            <div class="header__lng-icon">
                                <svg class="header__flag-{{ Lang::locale() }}">
                                    <use href="#flag-{{ Lang::locale() }}" width="38" height="30" fill="">
                                    </use>
                                </svg>
                            </div>
                            <!-- {{ Lang::locale() }} -->
                        </button>
                    </div>
                    <div class="header__lng-list-position">
                        <ul class="header__lng-list">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="header__lng-item {!! $localeCode === Lang::locale() ? 'is-active' : '' !!}">
                                    @if ($localeCode !== Lang::locale())
                                        <a class="header__lng-link" rel="alternative" hreflang="{{ $localeCode }}"
                                            href="/{{ $localeCode }}">
                                    @endif
                                    <div class="header__lng-row">
                                        <div class="header__lng-icon">
                                            <svg class="header__flag-{{ $localeCode }}">
                                                <use href="#flag-{{ $localeCode }}" width="38" height="30"
                                                    fill=""></use>
                                            </svg>
                                        </div>
                                        <div class="header__lng-content">
                                            <div class="span header__lng-text">
                                                {{ $properties['native'] }}
                                            </div>
                                        </div>
                                    </div>
                                    @if ($localeCode !== Lang::locale())
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
