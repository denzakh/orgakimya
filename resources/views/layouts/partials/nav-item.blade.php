@php
    $isActive = LaravelLocalization::localizeUrl($item['url']) === url()->current() ? 'is-active' : '';
@endphp

@if($isActive)
<div class="nav__item is-active">
    <span class="nav__link-active">{{ __($item['title']) }}</span>
</div>
@else
<a class="nav__item" href="{{ LaravelLocalization::localizeUrl($item['url']) }}">
    <span class="nav__link-inner">{{ __($item['title']) }}</span>
</a>
@endif
