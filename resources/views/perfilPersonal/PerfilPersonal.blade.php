@extends('layouts.user')

@section('content')
    @push('css')
    <link rel="stylesheet" href="css/perfil_Personal.css" 
    @endpush <div class="container mx-auto flex flex-wrap">
    <div class="w-1/2 p-6" id="principal">

        <img src="/img/imatgeTatiana.png" alt="imagen_del_usuario" class="mb-3 rounded-full w-48 h-48" id="block">
        <h4 id="block" class="text-2xl font-bold">{{ $authenticatedUser->name }}</h4>
    </div>
    <div class="w-1/2 p-6">
        <table id="tablePerfil" class="table-auto text-lg">
            <tbody>
                <tr class="bg-gray-100">
                    <td class="font-bold pr-4">Nombre:</td>
                    <td>{{ $authenticatedUser->name }}</td>
                </tr>
                <tr>
                    <td class="font-bold pr-4">Apellidos:</td>
                    <td>{{ $authenticatedUser->last_name }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="font-bold pr-4">Nombre de usuario:</td>
                    <td>{{ $authenticatedUser->nick_name }}
                    </td>
                </tr>
                <tr>
                    <td class="font-bold pr-4">Email:</td>
                    <td>{{ $authenticatedUser->email }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="font-bold pr-4">Teléfono:</td>
                    <td>{{ $authenticatedUser->phone }}</td>
                </tr>
                <tr>
                    <td class="font-bold pr-4">Empresa</td>
                    <td>{{ $authenticatedUser->company_id }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="/Perfil_Personal/Editar_Perfil" class="boton1">Editar Perfil</a>
        </div>
    </div>
    </div>
@endsection
<style scoped>

    .boton1 {
        background-color: rgb(247, 192, 115);
        color: rgb(0, 0, 0);
        border: 2px solid rgb(0, 0, 0);
        border-radius: 5px;
        font-size: 16px;
        padding: 10px 20px;
        margin-left: 10px;
    }

    .boton1:hover {
        background-color: white;
        color: rgb(0, 0, 0);
        cursor: pointer;
        transform: scale(1.1);
    }
    
    #block{
        margin-left: 350px;

    }

    #tablePerfil{
        height: 300px;
        width: 500px;

    }
</style>
