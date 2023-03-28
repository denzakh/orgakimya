<x-layout>
        <h1>Welcome</h1>


        <a href="{{ LaravelLocalization::localizeUrl('/about') }}">{{ LaravelLocalization::localizeUrl('/about') }}</a>

        <a href="{{ LaravelLocalization::localizeUrl('/posts') }}">{{ LaravelLocalization::localizeUrl('/posts') }}</a>

        <p>

        {{ LaravelLocalization::getCurrentLocale() }}

        {{ LaravelLocalization::getCurrentLocaleNative() }}
        
        </p>



        <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
        </ul>


        {{ __('Menu: About') }}



</x-layout>