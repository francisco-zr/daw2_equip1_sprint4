<template>
    <AddCompany></AddCompany>
    <div class="m-10">
    hola

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