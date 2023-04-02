@php
	$tel = $mdsettings['phone1'];
	$telUrl = preg_replace('![^0-9]+!', '', $tel);
	$email = $mdsettings['email1'];
	$isNotHomePage = !(url()->current() === url()->to('/'));
 
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
					<button type="button" onclick="window.myDialog.show();">Просто открыть</button>
					<button type="button" onclick="window.myDialog.showModal();">Открыть как модалку</button>
					<dialog id="myDialog">🖖 Живи долго и процветай!</dialog>
				</div>
			</div>
		</div>
	</div>
</header>