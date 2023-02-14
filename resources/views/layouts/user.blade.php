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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- CSS include -->
    @vite('resources/css/app.css')
    @if (Auth::check())
        <script>
            window.authUser = {!! json_encode(Auth::user()) !!};
        </script>
    @else
        <script>
            window.authUser = null;
        </script>
    @endif
</head>

<body class="flex flex-col min-h-screen">
    <div id="app">
        <div class="sticky top-0 left-0 right-0 z-10">
            <!-- Vue.js Header and Navbar -->
            <navbar />
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <!-- Vue.js javascript -->
    @vite('resources/js/app.js')
    <!-- Footer include -->
    @include('layouts.parts.footer')
</body>

</html>
