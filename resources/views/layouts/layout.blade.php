<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=open-sans:400,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.less', 'resources/js/app.js'])
    </head>
    <body class="body">
        <div class="body-wrapper">
            @include('layouts.header')
            <main>
                {{ $slot }}
            </main>            
            @include('layouts.footer')
        </div>
    </body>
</html>