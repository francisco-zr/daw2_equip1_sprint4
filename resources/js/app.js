import 'jquery/dist/jquery.min.js'
import '../css/app.css' //importacion de tailwind
import { create } from "lodash";
import { createApp } from "vue";
import App from "./components/Navbar.vue";
import PerfilPersonal from "./components/PerfilPersonal.vue"

createApp(App).mount("#navbar");
create(PerfilPersonal).mount('#perfilPersonal');
