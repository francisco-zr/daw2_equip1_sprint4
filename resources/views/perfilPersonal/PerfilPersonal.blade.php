@extends('layouts.user')

@section('content')
    @push('css')
    <link rel="stylesheet" href="css/perfil_Personal.css">
    @endpush
    <div class="container mx-auto flex flex-wrap">
        <div class="w-1/2 p-6" id="principal">
            
            <img src="{{ $authenticatedUser->profile_image ? $authenticatedUser->profile_image : asset('img/default_profile.png') }}" alt="imagen_del_usuario" class="mb-3 rounded-full w-48 h-48" id="block">
            <h4 id="block1" class="text-2xl font-bold">{{ $authenticatedUser->name }} {{ $authenticatedUser->last_name }}</h4>
        </div>
        <div class="w-1/2 p-6">
            <table id="tablePerfil" class="table-auto text-lg">
                <tbody>
                    <tr class="bg-gray-100">
                        <td>Nombre</td>
                        <td>{{ $authenticatedUser->name }}</td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td>{{ $authenticatedUser->last_name }}</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td>Nombre de usuario</td>
                        <td>{{ $authenticatedUser->nick_name }}
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $authenticatedUser->email }}</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td>Teléfono</td>
                        <td>{{ $authenticatedUser->phone }}</td>
                    </tr>
                    <tr>
                        <td>Empresa</td>
                        <td>{{ $authenticatedUser->company_id }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6">
                <a href="/Perfil_Personal/Editar_Perfil" class="bg-orange-500 hover:bg-white text-black font-medium py-2 px-4 rounded-lg border-2 border-black transition-transform duration-500 ease-in-out">
                    Editar Perfil
                  </a>
                  
            </div>
        </div>
    </div>
@endsection
<style scoped>

    #block {
        margin-left: 300px;

    }
    #block1 {
        margin-left: 270px;

    }
    #tablePerfil {
        height: 250px;
        width: 500px;

    }

    
    h4 {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    td:first-child {
        padding-right: 20px;
    }

    td:last-child {
        padding-left: 20px;
    }

    tr:nth-child(odd) {
        /*Ficar color a les linies inpars*/
        background-color: lightgray;
    }

    tr:nth-child(even) {
        /*Ficar color a les linies pars*/
        background-color: white;
    }
    
</style>
