<!DOCTYPE html>
<html class="h-full bg-gray-50" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="h-full login-background">
    <main class="h-full">
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8 bg-white p-6 rounded drop-shadow-md">
                <div>
                    <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo_pymeshield.png') }}" alt="pymeshield">
                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Pymeshield</h2>
                    <p class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">
                        Inicia sesión

                    </p>
                </div>
                <form class="mt-8 space-y-6" action="#" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="email-address" class="sr-only">Email</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm" placeholder="Email">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Contraseña</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Recuérdame</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-orange-600 hover:text-orange-500">¿Has olvidado la contraseña?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-orange-600 py-2 px-4 text-sm font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <!-- Heroicon name: mini/lock-closed -->
                                <svg class="h-5 w-5 text-orange-200 group-hover:text-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            Entra
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</body>

</html>