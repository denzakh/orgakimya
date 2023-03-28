@php 
	$isActive = LaravelLocalization::localizeUrl($item['url']) === url()->current();
@endphp 


<x-nav-link 
    :href="LaravelLocalization::localizeUrl($item['url'])" 
    :active="$isActive"
>
    {{ __($item['title']) }}

    {{ request()->routeIs(LaravelLocalization::localizeUrl($item['url']))  }}
</x-nav-link>