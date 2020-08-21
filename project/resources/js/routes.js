import Dashboard from './components/DashboardComponent.vue'
import Profile from './components/ProfileComponent.vue'
import User from './components/UserComponent.vue'
import CategoriaCorte from './components/CategoriaCorteComponent.vue'
import Corte from './components/CorteComponent.vue'
import Inicio from './components/InicioComponent.vue'
import QuienesSomos from './components/QuienesSomosComponent.vue'
import Produccion from './components/ProduccionComponent.vue'
import Exportacion from './components/ExportacionComponent.vue'
import Calidad from './components/CalidadComponent.vue'
import ImpactoSocial from './components/ImpactoSocialComponent.vue'
import PaginaProductos from './components/PaginaProductosComponent.vue'
import PaginaRecursosHumanos from './components/PaginaRecursosHumanosComponent.vue'

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
    { 
        path:'/inicio',
        component:Inicio
    },
    { 
        path:'/quienessomos',
        component:QuienesSomos
    },
    { 
        path:'/produccion',
        component:Produccion
    },
    { 
        path:'/exportacion',
        component:Exportacion
    },
    { 
        path:'/calidad',
        component:Calidad
    },
    { 
        path:'/impactosocial',
        component:ImpactoSocial
    },
    { 
        path:'/paginaproductos',
        component:PaginaProductos
    },
    { 
        path:'/paginarecursoshumanos',
        component:PaginaRecursosHumanos
    },
 
 
];