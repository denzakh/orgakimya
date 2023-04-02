@php
	$tel = $mdsettings['phone1'];
	$telUrl = preg_replace('![^0-9]+!', '', $tel);
	$email = $mdsettings['email1'];
	$isNotHomePage = !(url()->current() === url()->to('/'));
 
@endphp 

<header>
	<div class="container">
		<div class="header__inner">
			<div class="header__row">
				<div class="header__logo-box">
					@if($isNotHomePage) 
						<a href="/">
					@endif
						{!! get_picture_th('design/', 'logo-header') !!}
					@if($isNotHomePage) 
						</a>
					@endif
				</div>
				<div class="header__nav-box">
					@include('layouts.nav')
				</div>
				<div class="header__r-box">
					<div class="header__r">
						<div class="header__r-item">
							<a href="tel:+{{ $telUrl }}" class="header__tel">{{ $tel }}</a>
							<a href="mailto:{{ $email }}" class="header__email">{{ $email }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>