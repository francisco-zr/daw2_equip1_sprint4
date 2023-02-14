@extends('layouts.user')

@section('content')
    <div class="p-5 md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Editar Política de Privacidad</h3>
            <p class="mt-1 text-sm text-gray-600">Aquí podrás editar la Política de Privacidad de la página.
            </p>
        </div>
    </div>
    <editor url="/edit_privacy" db="privacy_policy"/>

@stop
