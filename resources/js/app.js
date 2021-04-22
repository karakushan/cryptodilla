/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

const moment = require('moment')
require('moment/locale/ru')

Vue.use(require('vue-moment'), {
    moment
})

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

import VueChatScroll from 'vue-chat-scroll';

Vue.use(VueChatScroll);

import Vuex from 'vuex'

Vue.use(Vuex)
import store from "./store/app"

Vue.prototype.$__ = function (trans) {
    if (typeof window.langs !== 'undefined' && typeof window.langs[trans] !== 'undefined') {
        return window.langs[trans]
    }

    return trans
}

// Views
import Trading from "./views/Trading";
import Dashboard from "./views/Dashboard";
import Exchanges from "./views/Exchanges";
import Profile from "./views/Profile";

import VueRouter from 'vue-router'

Vue.use(VueRouter)
const routes = [
    {path: '/', component: Trading, name: 'Торговля'},
    {path: '/bots', component: Trading, name: 'Боты'},
    {path: '/exchanges', component: Exchanges, name: 'Мои биржи'},
    {path: '/profile', component: Profile, name: 'Мои данные'},

]
const router = new VueRouter({
    routes
})

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
    store,
    vuetify: new Vuetify({
        theme: {dark: true},
    }),
    el: '#app'
});
