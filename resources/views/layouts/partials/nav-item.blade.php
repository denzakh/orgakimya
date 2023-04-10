@php
    $isActive = LaravelLocalization::localizeUrl($item['url']) === url()->full() ? 'is-active' : '';
@endphp

@if($isActive)
<li class="nav__item is-active">
    <span class="nav__link-active">{{ __($item['title']) }}</span>
</li>
@else
<li class="nav__item">
	<a class="nav__link" href="{{ LaravelLocalization::localizeUrl($item['url']) }}">
	    <span class="nav__link-inner">{{ __($item['title']) }}</span>
	</a>
</li>
@endif