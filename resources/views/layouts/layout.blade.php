<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description }}">

    <title>{{ $title }} - {{ $mdsettings['firm'] }}</title>


    
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
