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
                <path fill="#00247D" d="M0 9.059V13h5.628zM4.664 31H13v-5.837zM23 25.164V31h8.335zM0 23v3.941L5.63 23zM31.337 5H23v5.837zM36 26.942V23h-5.631zM36 13V9.059L30.371 13zM13 5H4.664L13 10.837z"></path><path fill="#CF1B2B" d="M25.14 23l9.712 6.801a3.977 3.977 0 0 0 .99-1.749L28.627 23H25.14zM13 23h-2.141l-9.711 6.8c.521.53 1.189.909 1.938 1.085L13 23.943V23zm10-10h2.141l9.711-6.8a3.988 3.988 0 0 0-1.937-1.085L23 12.057V13zm-12.141 0L1.148 6.2a3.994 3.994 0 0 0-.991 1.749L7.372 13h3.487z"></path><path fill="#EEE" d="M36 21H21v10h2v-5.836L31.335 31H32a3.99 3.99 0 0 0 2.852-1.199L25.14 23h3.487l7.215 5.052c.093-.337.158-.686.158-1.052v-.058L30.369 23H36v-2zM0 21v2h5.63L0 26.941V27c0 1.091.439 2.078 1.148 2.8l9.711-6.8H13v.943l-9.914 6.941c.294.07.598.116.914.116h.664L13 25.163V31h2V21H0zM36 9a3.983 3.983 0 0 0-1.148-2.8L25.141 13H23v-.943l9.915-6.942A4.001 4.001 0 0 0 32 5h-.663L23 10.837V5h-2v10h15v-2h-5.629L36 9.059V9zM13 5v5.837L4.664 5H4a3.985 3.985 0 0 0-2.852 1.2l9.711 6.8H7.372L.157 7.949A3.968 3.968 0 0 0 0 9v.059L5.628 13H0v2h15V5h-2z"></path><path fill="#CF1B2B" d="M21 15V5h-6v10H0v6h15v10h6V21h15v-6z"></path>
            </symbol>
            <symbol id="flag-tr" viewBox="9 6 20 25" title="flag-tr" desc="">
            	<defs><clipPath id="id1"><path d="M 2.347656 5.382812 L 27.027344 5.382812 L 27.027344 23.527344 L 2.347656 23.527344 Z M 2.347656 5.382812 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="rgb(89.019775%, 3.529358%, 9.01947%)" d="M 27.019531 20.738281 C 27.019531 22.277344 25.792969 23.527344 24.277344 23.527344 L 5.09375 23.527344 C 3.582031 23.527344 2.355469 22.277344 2.355469 20.738281 L 2.355469 8.175781 C 2.355469 6.632812 3.582031 5.382812 5.09375 5.382812 L 24.277344 5.382812 C 25.792969 5.382812 27.019531 6.632812 27.019531 8.175781 Z M 27.019531 20.738281 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="rgb(93.328857%, 93.328857%, 93.328857%)" d="M 13.316406 18.644531 C 11.046875 18.644531 9.207031 16.769531 9.207031 14.457031 C 9.207031 12.144531 11.046875 10.269531 13.316406 10.269531 C 14.214844 10.269531 15.042969 10.566406 15.71875 11.0625 C 14.796875 10 13.449219 9.324219 11.945312 9.324219 C 9.164062 9.324219 6.910156 11.621094 6.910156 14.457031 C 6.910156 17.292969 9.164062 19.589844 11.945312 19.589844 C 13.449219 19.589844 14.796875 18.914062 15.71875 17.847656 C 15.042969 18.347656 14.214844 18.644531 13.316406 18.644531 Z M 15.996094 14.617188 L 17.667969 15.007812 L 17.820312 16.75 L 18.703125 15.25 L 20.375 15.644531 L 19.246094 14.324219 L 20.128906 12.828125 L 18.550781 13.511719 L 17.425781 12.191406 L 17.574219 13.933594 Z M 15.996094 14.617188 " fill-opacity="1" fill-rule="nonzero"/>
			</symbol>
			<symbol id="flag-ru" viewBox="4 0 30 28" title="flag-ru" desc="">
				<g clip-path="url(#clip0_503_2726)">
				<rect x="0.25" y="0.25" width="27.5" height="19.5" rx="1.75" fill="white" stroke="#F5F5F5" stroke-width="0.5"/>
				<mask id="mask0_503_2726" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="20">
				<rect x="0.25" y="0.25" width="27.5" height="19.5" rx="1.75" fill="white" stroke="white" stroke-width="0.5"/>
				</mask>
				<g mask="url(#mask0_503_2726)">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M0 13.3333H28V6.66667H0V13.3333Z" fill="#0C47B7"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M0 20H28V13.3333H0V20Z" fill="#E53B35"/>
				</g>
				</g>
				<defs>
				<clipPath id="clip0_503_2726">
				<rect width="28" height="20" rx="2" fill="white"/>
				</clipPath>
				</defs>
			</symbol>
            </symbol>
        </defs>
    </svg>












	<div class="header__inner">
		<div class="header__row">
			<div class="header__logo-col">
				@if($isNotHomePage) 
					<a href="/" class="header__logo-link">
				@endif
				<div class="header__logo-box">
					{!! get_picture_th([
					    'catalog' => 'design',
					    'img' => 'logo-header-200',
					    'exe' => 'png',
					    'isLazy' => false,
					    'alt' => 'Logo'
					]) !!}
				</div>
				@if($isNotHomePage) 
					</a>
				@endif
			</div>
			<div class="header__top-col">
				<div class="header__contact">
					<div class="header__r-item">
						Tel: <a href="tel:+{{ $telUrl }}" class="header__tel">{{ $tel }}</a>
					</div>	
					<div class="header__r-item">
						Email: <a href="mailto:{{ $email }}" class="header__email">{{ $email }}</a>
					</div>	
				</div>					
			</div>			
			<div class="header__nav-col">
				@include('layouts.nav')
			</div>
			<div class="header__r-col">
				<div class="header__lng">
					<ul class="header__lng-list">
					@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<li  class="header__lng-item">
							<div class="header__lng-icon">
                                <svg class="header__flag-{{$localeCode}}">
                                    <use href="#flag-{{$localeCode}}" width="38" height="30" fill=""></use>
                                </svg>
                            </div>
                            <div class="header__lng-content">
								@if($localeCode === Lang::locale())
								<span class="header__lng-current">{{ $properties['native'] }}</span>	
								@else
								<a class="header__lng-link" rel="alternative" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									{{ $properties['native'] }}
								</a>
								@endif
							</div>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>


