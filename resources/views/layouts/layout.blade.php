<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(isset($description))
        <meta name="description" content="{{ $description }}">
    @endif

    <title>
        @if(isset($description))
            {{ $title }} - {{ $mdsettings['firm'] }}
        @else
            {{ $mdsettings['firm'] }}
        @endif
        
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="/storage/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/storage/images/icons/site.webmanifest">
    <link rel="shortcut icon" href="/storage/images/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/storage/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    
    <!-- Scripts -->
    @vite(['resources/css/app.less', 'resources/js/app.js'])
    <!-- тест -->
</head>

<body class="body">
    <div class="body-wrapper">
        @include('layouts.header')
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>
    @include('layouts.script')
</body>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=open-sans:400,500&display=swap" rel="stylesheet" />

</html>
