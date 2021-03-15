/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

// Views
import Trading from "./views/Trading";
import Dashboard from "./views/Dashboard";

import VueRouter from 'vue-router'

Vue.use(VueRouter)
const routes = [
    {path: '/', component: Dashboard, name: 'Панель'},
    {path: '/trading', component: Trading, name: 'Торговля'},
]
const router = new VueRouter({
    routes // сокращённая запись для `routes: routes`
})

// export default new Vuetify({
//     theme: { dark: true },
// })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('app', require('./components/App').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    router,
    vuetify: new Vuetify({
        theme: {dark: true},
    }),
    el: '#app'
});
