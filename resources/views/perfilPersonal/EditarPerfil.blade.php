@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3 left-table">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">

                                <img src="/img/imatgeTatiana.png" alt="imagen_del_usuario" class="mb-3 img-fluid">
                                <h4>{{ $authenticatedUser->name }} {{ $authenticatedUser->last_name }}</h4>
                                <button class="boton1">
                                    Cambiar foto
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 right-table">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{ route('profile.update') }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <h3 style="text-align: center;">Información personal</h3>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td>
                                                        <input name="name" type="text"
                                                            value="{{ $authenticatedUser->name }}" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apellidos</td>
                                                    <td>
                                                        <input name="last_name" type="text"
                                                            value="{{ $authenticatedUser->last_name }}" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nombre de usuario</td>
                                                    <td>
                                                        <input name="nick_name" type="text"
                                                            value="{{ $authenticatedUser->nick_name }}" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>
                                                        <input name="email" type="text"
                                                            value="{{ $authenticatedUser->email }}" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Teléfono</td>
                                                    <td>
                                                        <input name="phone" type="text"
                                                            value="{{ $authenticatedUser->phone }}" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Empresa</td>
                                                    <td>Pymeralia</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="boton1">Guardar cambios</button>
                                        <button class="boton1">Cambiar contraseña</button>
                                        <a class="boton1" href="/Perfil_Personal">Cancelar</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Change Image Modal -->
    </div>
@endsection

<style>
    .left-table {
        float: left;
        margin-left: 100px;
    }

    .right-table {
        float: right;
        margin-right: 100px;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main-body {
        width: 80%;
        height: 100%;
        margin: 0 auto;
    }

    .gutters-sm {
        padding: 20px;
    }

    .card {
        background-color: #fff;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .img-fluid {
        max-width: 200px;
        height: auto;
        border-radius: 50%;
    }

    td {
        padding: 7px;
    }

    table {
        border: 1px solid black;
        width: 100%;
        height: 70%;
    }

    h4 {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 100px;
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

    .boton1 {
        background-color: rgb(247, 192, 115);
        color: rgb(0, 0, 0);
        border: 2px solid rgb(0, 0, 0);
        border-radius: 5px;
        font-size: 16px;
        padding: 10px 20px;
        transition: all 0.2s ease-in-out;
        margin-left: 10px;
        margin-top: 5%;

    }

    .boton1:hover {
        background-color: white;
        color: rgb(0, 0, 0);
        cursor: pointer;
        transform: scale(1.1);
    }
</style>
