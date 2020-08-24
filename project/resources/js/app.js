require('./bootstrap');

window.Vue = require('vue');

//Import Vue Filter
require('./filter'); 

//Import progressbar
require('./progressbar'); 

//Setup custom events 
require('./customEvents'); 

//Import View Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueHasErrorLaravel from 'vue-has-error-laravel'
Vue.use(VueHasErrorLaravel)

import objectToFormData from "./objectToFormData"; 
window.objectToFormData = objectToFormData;

//Import Sweetalert2
import Swal from 'sweetalert2'
window.Swal = Swal
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
window.Toast = Toast

//Import Variables
import { imagesRootPath } from './variables'
Vue.prototype.$imagesRootPath = imagesRootPath;

//Import v-from
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//import ckeditor

import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );

import VuePaginate from 'vue-paginate'
Vue.use(VuePaginate)


//Routes
import { routes } from './routes';

//Register Routes
const router = new VueRouter({
    routes, 
    mode: 'hash',

})

import * as VueGoogleMaps from "vue2-google-maps";

Vue.use(VueGoogleMaps, {
  load: {
    key: "AIzaSyDSHwvcanMx6o5Lr1KWqL7sPMFVeKGBnUg",
    libraries: "places" // necessary for places input
  }
});

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
});