import 'jquery/dist/jquery.min.js'
//defineAsync para cargar los componentes de forma asíncrona
import { createApp, defineAsyncComponent } from "vue/dist/vue.esm-bundler";


const app = createApp({})

//registramos los componentes
const navbar = defineAsyncComponent(() => import('./components/Navbar.vue'));
app.component('navbar', navbar);

const admin = defineAsyncComponent(() => import('./components/AdminPanel.vue'));
app.component('admin-layout', admin);

const listcompany = defineAsyncComponent(() => import('./components/ListCompany.vue'));
app.component('list-company', listcompany);

const quillEditor = defineAsyncComponent(() => import('./components/Editor.vue'));
app.component('editor', quillEditor);

const listusers = defineAsyncComponent(() => import('./components/ListUsers.vue'));
app.component('list-users', listusers);

const perfilPersonal = defineAsyncComponent(() => import('./components/PerfilPersonal.vue'));
app.component('PerfilPersonal', perfilPersonal);

// se monta la app
app.mount("#app");
