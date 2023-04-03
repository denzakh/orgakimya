@php
	$tel = $mdsettings['phone1'];
	$telUrl = preg_replace('![^0-9]+!', '', $tel);
	$email = $mdsettings['email1'];
	$isNotHomePage = !(url()->current() === url()->to('/'));

	$locArr = LaravelLocalization::getSupportedLanguagesKeys();
@endphp 

<header class="header">
	<div class="header__inner">
		<div class="header__row">
			<div class="header__logo-col">
				@if($isNotHomePage) 
					<a href="/" class="header__logo-link">
				@endif
				<div class="header__logo-box">
					
				</div>
				@if($isNotHomePage) 
					</a>
				@endif
			</div>
			<div class="header__nav-col">
				@include('layouts.nav')
			</div>
			<div class="header__r-col">
				<!-- <div class="header__r">
					<div class="header__r-item">
						<a href="tel:+{{ $telUrl }}" class="header__tel">{{ $tel }}</a>
					</div>	
					<div class="header__r-item">
						<a href="mailto:{{ $email }}" class="header__email">{{ $email }}</a>
					</div>	
				</div> -->

				<div class="header__lng">


					<ul>
					@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<li>
							<a rel="alternative" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
								{{ $properties['native'] }}
							</a>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>