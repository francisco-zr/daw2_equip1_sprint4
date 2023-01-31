<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pymeshield</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- CSS include -->
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <div class="sticky top-0 left-0 right-0">
        <!-- Vue.js Header and Navbar -->
        <div id="navbar"></div>
    </div>
    <!-- Vue.js javascript -->
    @vite('resources/js/app.js')
    <main>
        @yield('content')
    </main>
    <!-- Footer include -->
    @include('layouts.parts.footer')
</body>

</html>