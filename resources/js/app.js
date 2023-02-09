import 'jquery/dist/jquery.min.js'
import '../css/app.css' //importacion de tailwind
import { create } from "lodash";
import { createApp } from "vue/dist/vue.esm-bundler";
import RouterWeb from "./router/index"
import navbar from "./components/Navbar.vue";
import ListCompany from "./components/ListCompany.vue";
import AddCompany from "./components/AddCompany.vue";


const app = createApp({})
app.use(RouterWeb)

app.mount('#app')

createApp(navbar).mount("#navbar");
// createApp(ListCompany).mount('#listCompany');
// createApp(AddCompany).mount('#addCompany');



