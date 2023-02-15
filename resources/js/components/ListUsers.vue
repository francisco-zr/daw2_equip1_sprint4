<template>
    <AddUser></AddUser>
    <div class="m-10">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-orange-400 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    Teléfono
                </th>
            </tr>
        </thead>
        <tbody v-if="varusers.length > 0">
            <tr v-for="(user, key) in varusers" :key="key" class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ user.name }}
                </th>
                <td class="px-6 py-4">
                    {{ user.last_name }}
                </td>
                <td class="px-6 py-4">
                    {{ user.email }}
                </td>
                <td class="px-6 py-4">
                    {{ user.phone }}
                </td>
                <td class="px-6 py-4" >
                    <button>Eliminar</button>
                    <button @click="this.openModal()">Editar</button>
                </td>
            </tr>
        </tbody>
        <h1 class="text-lg content-center" v-else>No hay registros existentes.</h1>
    </table>

</div>
</template>

<script>

import axios from 'axios';

//Importem el botó d'afegir usuaris
import AddUser from './AddUser.vue';

export default {
    data() {
        return {
            varusers: []
        };
    },
    mounted() {
        this.getUsers()
    },
    methods:{
        getUsers(){
            axios.get("userList/userListing")
            
            .then(response => {
            this.varusers = [];
            this.varusers = response.data;
            dd(response.data);
            })
            .catch(error => {
            console.log(error);
            });
        },

        openModal(){ alert("hola")}
    },

    components: { AddUser }
};
</script>



