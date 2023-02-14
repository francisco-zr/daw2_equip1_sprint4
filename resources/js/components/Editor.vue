<template>
    <div class="gap-6 p-5">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <div class="shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <QuillEditor v-model:content="content" contentType="html" :my-url="url" style="min-height: 150px"
                        theme="snow" />
                </div>

                <div class="p-4 text-sm text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert"
                    v-if="success == 1">
                    <span class="font-medium">¡Cambios guardados!</span> Puedes volver a cambiar cosas y darle a
                    Guardar.
                </div>

                <div class="p-4 text-sm text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert" v-if="success == 0">
                    <span class="font-medium">¡Falló la conexión!</span> Vuelve a intentarlo en un rato.
                </div>

                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit" @click="save"
                        class="inline-flex justify-center rounded-md border border-transparent bg-orange-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
                        v-if="!loading">Guardar</button>
                    <button disabled type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-orange-300 py-2 px-4 text-sm font-medium text-white shadow-sm"
                        v-if="loading">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        Guardando...</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
</script>
<script>
export default {
    // propiedades para pasarles info al componente
    props: ['url', 'db'],
    data() {
        return {
            content: '',
            loading: false,
            success: 2
        }
    },
    created() {
        this.getText()
    },
    // aquí recogemos los datos
    methods: {
        getText() {
            axios.get(this.url + '/get')
                .then(response => {
                    this.content = '';
                    this.content = response.data[this.db];
                })
                .catch(error => {
                    console.log(error);
                });
        },
        save() {
            this.loading = true;
            axios.post(this.url, {
                content: this.content
            })
                .then(response => {
                    // le pongo un delay para darle feedback al usuario
                    this.success = 2;
                    setTimeout(() => this.loading = false, 2000);
                    setTimeout(() => this.success = 1, 2000);
                })
                .catch(error => {
                    this.success = 2;
                    setTimeout(() => this.loading = false, 2000);
                    setTimeout(() => this.success = 0, 2000);
                })
        }
    }
}
</script>
