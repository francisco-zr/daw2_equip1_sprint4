<template>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3 left-table">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="/img/imatgeTatiana.png" alt="imagen_del_usuario" class="mb-3 img-fluid">
                                <h4>Tatiana Valentinyova</h4>
                                <button class="fill">
                                    Cambiar foto de perfil
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
                                                    <input type="text" value="Tatiana" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Apellidos</td>
                                                <td>
                                                    <input type="text" value="Valentinyova" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nombre de usuario</td>
                                                <td>
                                                    <input type="text" value="Tatiana17" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <input type="text" value="tatianavalentiny@gmail.com" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Teléfono</td>
                                                <td>
                                                    <input type="text" value="658429179" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Empresa</td>
                                                <td>Pymeralia</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="boton1">Guardar cambios</button>
                                    <button class="boton1">Cambiar contraseña</button>
                                    <a href="/Perfil_Personal">
                                        <button class="boton1">Cancelar</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Change Image Modal -->
    </div>

</template>

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

button {
    /*Ficar  una separacio entre la taula i el boto*/
    margin-top: 20px;
}

.fill {
    background-color: #4aeebf;
    color: #000;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
}

.fill:hover {
    background-color: #c0f6ff;
}

.boton1 {
    background-color: blue;
    color: white;
    border: 2px solid blue;
    border-radius: 5px;
    font-size: 16px;
    padding: 10px 20px;
    transition: all 0.2s ease-in-out;
    margin-left: 10px;

}

.boton1:hover {
    background-color: white;
    color: blue;
    cursor: pointer;
    transform: scale(1.1);
}
</style>


