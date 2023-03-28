<x-nav-link 
    :href="LaravelLocalization::localizeUrl($item['url'])" 
>
    {{ __($item['title']) }}
</x-nav-link>