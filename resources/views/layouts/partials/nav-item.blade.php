@php 
	$isActive = LaravelLocalization::localizeUrl($item['url']) === url()->current() ? 'is-active' : '';
@endphp 
<a class="nav__item {{$isActive}}"
    href="{{LaravelLocalization::localizeUrl($item['url'])}}" 
>
	<span class="nav__link-inner">{{ __($item['title']) }}</span>
</a>