<template>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3 left-table">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img :src="user.profile_image ? user.profile_image : '/img/default_profile.png'"
                                    alt="imagen_del_usuario" class="mb-3 rounded-full w-48 h-48" id="block" />
                                <h4 id="block1" class="text-2xl font-bold">
                                    {{ user.name }} {{ user.last_name }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 right-table">
                    <h3 class="mt-5 font-bold" style="text-align: center;">Información personal</h3>
                    <table class="table table-striped p-6">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>
                                    {{ user.name }}
                                </td>
                            </tr>
                            <tr>
                                <td>Apellidos</td>
                                <td>
                                    {{ user.last_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>Nombre de usuario</td>
                                <td>
                                    {{ user.nick_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    {{ user.email }}
                                </td>
                            </tr>
                            <tr>
                                <td>Teléfono</td>
                                <td>
                                    {{ user.phone }}
                                </td>
                            </tr>
                            <tr>
                                <td>Empresa</td>
                                <td>Pymeralia</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/Perfil_Personal/Editar_Perfil"> <button
                            class="bg-orange-500 hover:bg-white text-black font-medium py-2 px-4 rounded-lg border-2 border-black transition-transform duration-500 ease-in-out mx-2">
                            Editar perfil
                        </button>
                    </a>
                </div>
            </div>
        </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            user: {},
        };
    },
    mounted() {
        axios.get('/user-info').then(response => {
            this.user = response.data;
        });
    },
};
</script>

<style>
.left-table {
    float: left;
    margin-left: 80px;
    margin-top: 40px;
    text-align: center;
}

.right-table {
    float: right;
    margin-right: 100px;
    margin-bottom: 20px;
}

button,
a {
    margin-top: 20px;
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
    font-size: 16px;
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