import Dashboard from './components/DashboardComponent.vue'
import Profile from './components/ProfileComponent.vue'
import User from './components/UserComponent.vue'
import CategoriaCorte from './components/CategoriaCorteComponent.vue'
import Corte from './components/CorteComponent.vue'

export const routes = [
    {
        path:'/dashboard',
        component:Dashboard
    },
    {
        path:'/profile',
        component:Profile
    },
    { 
        path:'/users',
        component:User
    },
    { 
        path:'/categorias-corte',
        component:CategoriaCorte
    },
    { 
        path:'/cortes',
        component:Corte
    },
 
 
];