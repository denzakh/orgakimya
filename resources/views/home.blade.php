<x-layout>
    <h1>Welcome</h1>


    <a href="{{ LaravelLocalization::localizeUrl('/about') }}">{{ LaravelLocalization::localizeUrl('/about') }}</a>

    <a href="{{ LaravelLocalization::localizeUrl('/posts') }}">{{ LaravelLocalization::localizeUrl('/posts') }}</a>

    <p>

        {{ LaravelLocalization::getCurrentLocale() }}

        {{ LaravelLocalization::getCurrentLocaleNative() }}

    </p>










</x-layout>
