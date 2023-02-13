<template>
    <div>
        <div class="gap-6 p-5">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <QuillEditor v-model:content="content" contentType="html" :my-url="url"
                            style="min-height: 150px" theme="snow" />
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <span type="submit" @click="save"
                            class="inline-flex justify-center rounded-md border border-transparent bg-orange-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Guardar</span>
                    </div>
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
    props: ['url'],
    data() {
        return {
            content: '',
            loading: false
        }
    },

    methods: {
        save() {
            this.loading = true;
            axios.post(this.url, {
                content: this.content
            })
                .then(response => {
                    this.loading = false;
                    console.log('success');
                })
                .catch(error => {
                    this.loading = false;
                    console.log('fail');
                })
        }
    }
}
</script>
