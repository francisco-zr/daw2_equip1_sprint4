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
const addcompany = defineAsyncComponent(() => import('./components/AddCompany.vue'));
app.component('add-company', addcompany);

// se monta la app
app.mount("#app");
