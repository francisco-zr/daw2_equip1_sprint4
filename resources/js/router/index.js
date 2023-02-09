import { createRouter, createWebHistory } from 'vue-router';


const ListCompany = () => import ('../components/ListCompany.vue')
const PerfilPersonal = () => import ('../components/PerfilPersonal.vue')



const routes=[
    {
        path:'/llistatEmpreses',
        name:'llistatEmpreses',
        component:ListCompany
    },
    {
        path:'/Perfil_Personal',
        name:'Perfil-Personal',
        component:PerfilPersonal
    }

    // {
    //     path:'/acceptacio-tasques',
    //     name:'tasques',
    //     component:TablaAceptarTareas
    // },
    // {
    //     path:'/my-tasks',
    //     name:'my-tasks',
    //     component:CustomerTaskTableComponent
    // },
];

const router = createRouter({
 history: createWebHistory(import.meta.env.BASE_URL),
 routes
});

export default router;