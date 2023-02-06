import 'jquery/dist/jquery.min.js'
import '../css/app.css' //importacion de tailwind
import { create } from "lodash";
import { createApp } from "vue";
import App from "./components/Navbar.vue";
import PerfilPersonal from "./components/PerfilPersonal.vue";
import ListCompany from "./components/ListCompany.vue";
import AddCompany from "./components/AddCompany.vue";

createApp(App).mount("#navbar");
createApp(PerfilPersonal).mount('#perfilPersonal');
createApp(ListCompany).mount('#listCompany');
createApp(AddCompany).mount('#addCompany')
