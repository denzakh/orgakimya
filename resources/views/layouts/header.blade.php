@php
    $tel = $mdsettings['phone1'];
    $telUrl = preg_replace('![^0-9]+!', '', $tel);
    $email = $mdsettings['email1'];
    $isNotHomePage = !(url()->current() === url()->to('/'));
    
    $locArr = LaravelLocalization::getSupportedLanguagesKeys();
@endphp


<header class="header">
    <svg class="hidden">
        <defs>
            <symbol id="flag-en" viewBox="8 5 34 37" title="flag-en" desc="">
                <path fill="#00247D"
                    d="M0 9.059V13h5.628zM4.664 31H13v-5.837zM23 25.164V31h8.335zM0 23v3.941L5.63 23zM31.337 5H23v5.837zM36 26.942V23h-5.631zM36 13V9.059L30.371 13zM13 5H4.664L13 10.837z">
                </path>
                <path fill="#CF1B2B"
                    d="M25.14 23l9.712 6.801a3.977 3.977 0 0 0 .99-1.749L28.627 23H25.14zM13 23h-2.141l-9.711 6.8c.521.53 1.189.909 1.938 1.085L13 23.943V23zm10-10h2.141l9.711-6.8a3.988 3.988 0 0 0-1.937-1.085L23 12.057V13zm-12.141 0L1.148 6.2a3.994 3.994 0 0 0-.991 1.749L7.372 13h3.487z">
                </path>
                <path fill="#EEE"
                    d="M36 21H21v10h2v-5.836L31.335 31H32a3.99 3.99 0 0 0 2.852-1.199L25.14 23h3.487l7.215 5.052c.093-.337.158-.686.158-1.052v-.058L30.369 23H36v-2zM0 21v2h5.63L0 26.941V27c0 1.091.439 2.078 1.148 2.8l9.711-6.8H13v.943l-9.914 6.941c.294.07.598.116.914.116h.664L13 25.163V31h2V21H0zM36 9a3.983 3.983 0 0 0-1.148-2.8L25.141 13H23v-.943l9.915-6.942A4.001 4.001 0 0 0 32 5h-.663L23 10.837V5h-2v10h15v-2h-5.629L36 9.059V9zM13 5v5.837L4.664 5H4a3.985 3.985 0 0 0-2.852 1.2l9.711 6.8H7.372L.157 7.949A3.968 3.968 0 0 0 0 9v.059L5.628 13H0v2h15V5h-2z">
                </path>
                <path fill="#CF1B2B" d="M21 15V5h-6v10H0v6h15v10h6V21h15v-6z"></path>
            </symbol>
            <symbol id="flag-tr" viewBox="9 6 20 25" title="flag-tr" desc="">
                <defs>
                    <clipPath id="id1">
                        <path
                            d="M 2.347656 5.382812 L 27.027344 5.382812 L 27.027344 23.527344 L 2.347656 23.527344 Z M 2.347656 5.382812 "
                            clip-rule="nonzero" />
                    </clipPath>
                </defs>
                <g clip-path="url(#id1)">
                    <path fill="rgb(89.019775%, 3.529358%, 9.01947%)"
                        d="M 27.019531 20.738281 C 27.019531 22.277344 25.792969 23.527344 24.277344 23.527344 L 5.09375 23.527344 C 3.582031 23.527344 2.355469 22.277344 2.355469 20.738281 L 2.355469 8.175781 C 2.355469 6.632812 3.582031 5.382812 5.09375 5.382812 L 24.277344 5.382812 C 25.792969 5.382812 27.019531 6.632812 27.019531 8.175781 Z M 27.019531 20.738281 "
                        fill-opacity="1" fill-rule="nonzero" />
                </g>
                <path fill="rgb(93.328857%, 93.328857%, 93.328857%)"
                    d="M 13.316406 18.644531 C 11.046875 18.644531 9.207031 16.769531 9.207031 14.457031 C 9.207031 12.144531 11.046875 10.269531 13.316406 10.269531 C 14.214844 10.269531 15.042969 10.566406 15.71875 11.0625 C 14.796875 10 13.449219 9.324219 11.945312 9.324219 C 9.164062 9.324219 6.910156 11.621094 6.910156 14.457031 C 6.910156 17.292969 9.164062 19.589844 11.945312 19.589844 C 13.449219 19.589844 14.796875 18.914062 15.71875 17.847656 C 15.042969 18.347656 14.214844 18.644531 13.316406 18.644531 Z M 15.996094 14.617188 L 17.667969 15.007812 L 17.820312 16.75 L 18.703125 15.25 L 20.375 15.644531 L 19.246094 14.324219 L 20.128906 12.828125 L 18.550781 13.511719 L 17.425781 12.191406 L 17.574219 13.933594 Z M 15.996094 14.617188 "
                    fill-opacity="1" fill-rule="nonzero" />
            </symbol>
            <symbol id="flag-ru" viewBox="4 0 30 28" title="flag-ru" desc="">
                <g clip-path="url(#clip0_503_2726)">
                    <rect x="0.25" y="0.25" width="27.5" height="19.5" rx="1.75" fill="white"
                        stroke="#F5F5F5" stroke-width="0.5" />
                    <mask id="mask0_503_2726" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                        y="0" width="28" height="20">
                        <rect x="0.25" y="0.25" width="27.5" height="19.5" rx="1.75" fill="white"
                            stroke="white" stroke-width="0.5" />
                    </mask>
                    <g mask="url(#mask0_503_2726)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 13.3333H28V6.66667H0V13.3333Z"
                            fill="#0C47B7" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 20H28V13.3333H0V20Z" fill="#E53B35" />
                    </g>
                </g>
                <defs>
                    <clipPath id="clip0_503_2726">
                        <rect width="28" height="20" rx="2" fill="white" />
                    </clipPath>
                </defs>
            </symbol>
            <symbol id="icon-tel" viewBox="0 0 24 24" title="icon-tel" desc="">
                <path d="M18.4 20.75H18.17C15.5788 20.4681 13.0893 19.5846 10.9 18.17C8.86618 16.8747 7.13938 15.1513 5.84 13.12C4.42216 10.925 3.53852 8.42823 3.26 5.83001C3.22816 5.52011 3.2596 5.20696 3.35243 4.90958C3.44525 4.6122 3.59752 4.33677 3.8 4.10001C3.99694 3.86008 4.24002 3.66211 4.51486 3.51782C4.78969 3.37354 5.09068 3.28587 5.4 3.26001H8C8.56312 3.26058 9.10747 3.46248 9.53476 3.82925C9.96205 4.19602 10.2441 4.70349 10.33 5.26001C10.425 5.97489 10.6028 6.67628 10.86 7.35001C11.0164 7.77339 11.0487 8.23264 10.9531 8.67375C10.8574 9.11485 10.6378 9.51947 10.32 9.84001L9.71 10.45C10.6704 11.9662 11.9587 13.2477 13.48 14.2L14.09 13.6C14.4105 13.2822 14.8152 13.0626 15.2563 12.9669C15.6974 12.8713 16.1566 12.9036 16.58 13.06C17.2545 13.3148 17.9556 13.4926 18.67 13.59C19.236 13.6751 19.7515 13.9638 20.1198 14.402C20.488 14.8403 20.6837 15.3978 20.67 15.97V18.37C20.67 18.9942 20.4227 19.593 19.9823 20.0353C19.5419 20.4776 18.9442 20.7274 18.32 20.73L18.4 20.75ZM8 4.75001H5.61C5.49265 4.75777 5.37809 4.78924 5.27325 4.84252C5.1684 4.8958 5.07545 4.96979 5 5.06001C4.92658 5.14452 4.871 5.24302 4.83663 5.34957C4.80226 5.45612 4.7898 5.56852 4.8 5.68001C5.04249 8.03679 5.83362 10.304 7.11 12.3C8.28664 14.1467 9.85332 15.7134 11.7 16.89C13.6973 18.1798 15.967 18.9878 18.33 19.25C18.4529 19.2569 18.5759 19.2383 18.6912 19.1953C18.8065 19.1522 18.9117 19.0857 19 19C19.1592 18.8368 19.2489 18.6181 19.25 18.39V16C19.2545 15.7896 19.1817 15.5848 19.0453 15.4244C18.9089 15.2641 18.7184 15.1593 18.51 15.13C17.6839 15.0189 16.8724 14.8177 16.09 14.53C15.9359 14.4724 15.7686 14.4596 15.6075 14.4933C15.4464 14.5269 15.2982 14.6055 15.18 14.72L14.18 15.72C14.0629 15.8342 13.912 15.9076 13.7499 15.9292C13.5877 15.9508 13.423 15.9195 13.28 15.84C11.1462 14.6342 9.37997 12.8715 8.17 10.74C8.08718 10.598 8.05402 10.4324 8.07575 10.2694C8.09748 10.1065 8.17286 9.95538 8.29 9.84001L9.29 8.84001C9.40468 8.72403 9.48357 8.57751 9.51726 8.41793C9.55095 8.25835 9.53802 8.09244 9.48 7.94001C9.19119 7.15799 8.98997 6.34637 8.88 5.52001C8.85519 5.30528 8.75133 5.10747 8.58865 4.96513C8.42597 4.82278 8.21613 4.7461 8 4.75001Z" fill="#ffffff"/>
            </symbol>
            <symbol id="icon-email" viewBox="0 0 512 512" title="icon-email" desc="">
                <path class="st0" d="M510.678,112.275c-2.308-11.626-7.463-22.265-14.662-31.054c-1.518-1.915-3.104-3.63-4.823-5.345
                c-12.755-12.818-30.657-20.814-50.214-20.814H71.021c-19.557,0-37.395,7.996-50.21,20.814c-1.715,1.715-3.301,3.43-4.823,5.345
                C8.785,90.009,3.63,100.649,1.386,112.275C0.464,116.762,0,121.399,0,126.087V385.92c0,9.968,2.114,19.55,5.884,28.203
                c3.497,8.26,8.653,15.734,14.926,22.001c1.59,1.586,3.169,3.044,4.892,4.494c12.286,10.175,28.145,16.32,45.319,16.32h369.958
                c17.18,0,33.108-6.145,45.323-16.384c1.718-1.386,3.305-2.844,4.891-4.43c6.27-6.267,11.425-13.741,14.994-22.001v-0.064
                c3.769-8.653,5.812-18.171,5.812-28.138V126.087C512,121.399,511.543,116.762,510.678,112.275z M46.509,101.571
                c6.345-6.338,14.866-10.175,24.512-10.175h369.958c9.646,0,18.242,3.837,24.512,10.175c1.122,1.129,2.179,2.387,3.112,3.637
                L274.696,274.203c-5.348,4.687-11.954,7.002-18.696,7.002c-6.674,0-13.276-2.315-18.695-7.002L43.472,105.136
                C44.33,103.886,45.387,102.7,46.509,101.571z M36.334,385.92V142.735L176.658,265.15L36.405,387.435
                C36.334,386.971,36.334,386.449,36.334,385.92z M440.979,420.597H71.021c-6.281,0-12.158-1.651-17.174-4.552l147.978-128.959
                l13.815,12.018c11.561,10.046,26.028,15.134,40.36,15.134c14.406,0,28.872-5.088,40.432-15.134l13.808-12.018l147.92,128.959
                C453.137,418.946,447.26,420.597,440.979,420.597z M475.666,385.92c0,0.529,0,1.051-0.068,1.515L335.346,265.221L475.666,142.8
                V385.92z" fill="#ffffff" />
            </symbol>
            <symbol id="icon-burger" viewBox="0 0 24 24" title="icon-email" desc="">
                <path d="M4 18L20 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 12L20 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 6L20 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
            </symbol>
        </defs>
    </svg>

    <div class="header__inner">
        <div class="header__row">
            <div class="header__logo-col">
                @if ($isNotHomePage)
                    <a href="/" class="header__logo-link">
                @endif
                <div class="header__logo-box no-mobile">
                    {!! get_picture_th([
                        'catalog' => 'design',
                        'img' => 'logo-header-200',
                        'exe' => 'png',
                        'isLazy' => false,
                        'alt' => 'Logo',
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
                        <a href="tel:+{{ $telUrl }}" class="header__tel">
                            <span class="no-mobile">{{ $tel }}</span>
                            <span class="only-mobile-ib">
                                <svg class="header__icon-link header__icon-link--tel">
                                    <use href="#icon-tel" width="40" height="37"
                                        fill=""></use>
                                </svg>                                
                            </span>
                        </a>
                    </div>
                    <div class="header__r-item">
                        <span class="no-mobile">Email: </span> 
                        <a href="mailto:{{ $email }}" class="header__email">
                            <span class="no-mobile">{{ $email }}</span>
                            <span class="only-mobile-ib">
                                <svg class="header__icon-link header__icon-link--email">
                                    <use href="#icon-email" width="34" height="35"
                                        fill=""></use>
                                </svg>                                
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__nav-col js-nav">
                <div class="header__nav-btn-wrap only-mobile">
                    <div class="header__nav-btn-box">
                        <button class="js-nav-btn header__nav-btn">
                            <svg class="burger-svg" width="40" height="40">
                                <use href="#icon-burger" 
                                    fill=""></use>
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
                        <button type="button" class="header__lng-btn js-lng-btn">
                            <div class="header__lng-icon">
                                <svg class="header__flag-{{ Lang::locale() }}">
                                    <use href="#flag-{{ Lang::locale() }}" width="38" height="30"
                                        fill=""></use>
                                </svg>
                            </div>
                        <!-- {{ Lang::locale() }} -->
                        </button>
                    </div>
                    <div class="header__lng-list-position">
                        <ul class="header__lng-list">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="header__lng-item {!! ($localeCode === Lang::locale()) ? 'is-active' : '' !!}">
                                    @if ($localeCode !== Lang::locale())
                                        <a class="header__lng-link" rel="alternative" hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
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
                                                <!-- <span class="no-mobile">{{ $properties['native'] }}</span>
                                                <span class="only-mobile">{{$localeCode}}</span>    -->                                                   
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

<script>
    (()=>{
        let toggle = (option) => {
            console.log("cl");
            option.btn.onclick = () => {
                option.parent.classList.toggle("is-open")
            };
        }

        let dom = (cl) => document.querySelector(cl);

        toggle({
            btn: dom(".js-lng-btn"),
            parent: dom(".js-lng")
        });

        toggle({
            btn: dom(".js-nav-btn"),
            parent: dom(".js-nav")
        });
    })();
</script>