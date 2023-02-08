@extends('layouts.auth')

@section('content')

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 bg-white p-6 rounded drop-shadow-md">
            <div>
                <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo_pymeshield.png') }}" alt="pymeshield">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Pymeshield</h2>
                <p class="mt-6 text-center text-lg tracking-tight text-gray-900">
                    Si ha olvidado su contraseña, puede utilizar este formulario para restablecerla. Recibirá un correo
                    electrónico con instrucciones.

                </p>
            </div>
            @if (session('status'))
                <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="sr-only">Danger</span>
                    <div>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                            <li>{{ session('status') ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <span class="sr-only">Danger</span>
                    <div>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <form class="mt-8 space-y-6" action="{{ route('rememberSend') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Email</label>
                        <input id="email-address" name="email" type="email" value="{{ old('email') }}"
                            autocomplete="email" required
                            class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                            placeholder="Email">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        <a href="{{ route('index') }}" class="font-medium text-orange-600 hover:text-orange-500">Pulse aquí
                            para volver
                            al inicio de sesión</a>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <x-turnstile />
                </div>

                <div>
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-orange-600 py-2 px-4 text-sm font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/lock-closed -->
                            <svg class="h-5 w-5 text-orange-200 group-hover:text-orange-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Restablecer
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop
