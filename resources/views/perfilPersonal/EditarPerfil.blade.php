@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3 left-table">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">

                                <img src="{{ $authenticatedUser->profile_image ? $authenticatedUser->profile_image : asset('img/default_profile.png') }}" alt="imagen_del_usuario" class="mb-3 rounded-full w-48 h-48" id="block">
                                <h4 id="block1" class="text-2xl font-bold">{{ $authenticatedUser->name }} {{ $authenticatedUser->last_name }}</h4>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 right-table">
                                  
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
                                        <button type="submit"
                                            class="bg-orange-500 hover:bg-white text-black font-medium py-2 px-4 rounded-lg border-2 border-black transition-transform duration-500 ease-in-out">Guardar
                                            cambios</button>
                                        <button id="open-modal"
                                            class="bg-orange-500 hover:bg-white text-black font-medium py-2 px-4 rounded-lg border-2 border-black transition-transform duration-500 ease-in-out">Cambiar
                                            contraseña</button>
                                        <a
                                            class="bg-orange-500 hover:bg-white text-black font-medium py-2 px-4 rounded-lg border-2 border-black transition-transform duration-500 ease-in-out"href="/Perfil_Personal">Cancelar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        /*donarli forma al text del nom i cognom on esta la imatge*/
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
