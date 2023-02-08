<template>
    <AddCompany></AddCompany>
    <div class="m-10">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-orange-400 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre empresa
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo electrónico
                </th>
                <th scope="col" class="px-6 py-3">
                    Nº de teléfono
                </th>
                <th scope="col" class="px-6 py-3">
                    CIF
                </th>
                <th scope="col" class="px-6 py-3">
                    Funciones
                </th>
            </tr>
        </thead>
        <tbody v-if="companies.length > 0">
            <tr v-for="(company, key) in companies" :key="key" class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ company.name }}
                </th>
                <td class="px-6 py-4">
                    {{ company.email }}
                </td>
                <td class="px-6 py-4">
                    {{ company.phone }}
                </td>
                <td class="px-6 py-4">
                    {{ company.cif }}
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
import AddCompany from './AddCompany.vue';

export default {
    data() {
        return {
            companies: []
        };
    },
    mounted() {
        this.getCompanies()
    },
    methods:{
        getCompanies(){
            axios.get("/llistatEmpreses/listCompanies")
            .then(response => {
            this.companies = [];
            this.companies = response.data;
            })
            .catch(error => {
            console.log(error);
            });
        },

        openModal(){ alert("hola")}
    },

    components: { AddCompany }
};
</script>



