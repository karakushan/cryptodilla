/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Echo from "laravel-echo"

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});

const moment = require('moment')
require('moment/locale/ru')

Vue.use(require('vue-moment'), {
    moment
})

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
import Preferences from "./views/Preferences";
import TwoFactorAuth from "./views/TwoFactorAuth";
import TwoFactorAuthStep1 from "./views/TwoFactorAuthStep1";
import TwoFactorAuthStep2 from "./views/TwoFactorAuthStep2";
import TwoFactorAuthStep3 from "./views/TwoFactorAuthStep3";
import TwoFactorAuthStep4 from "./views/TwoFactorAuthStep4";
import SelectExchange from "./views/SelectExchange";
import ExchangeConnect from "./views/ExchangeConnect";
import Markets from "./views/Markets";
import News from "./views/News";
import FAQ from "./views/FAQ";
import Support from "./views/Support";
import Ticket from "./views/Ticket";
import VueRouter from 'vue-router'
import VueNotify from 'vuejs-notify'
import Button from "./components/Button";

Vue.use(Button)
import TwoFactorAuthDisable from  "./views/TwoFactorAuthDisable"
import TwoFactorAuthDisabled from "./views/TwoFactorAuthDisabled";
import Bots from "./views/Bots";
import BotSettings from "./views/BotSettings";
import NewsItem from "./views/NewsItem";
import FaqItem from "./views/FaqItem";
import TicketMessaging from "./views/TicketMessaging";


Vue.use(VueNotify)

Vue.use(VueRouter)
const routes = [
    {path: '/', component: Trading, name: 'Торговля'},
    {path: '/bots', component: Bots, name: 'bots'},
    {path: '/bot/:id', component: BotSettings, name: 'botSettings', props: true},
    // {path: '/exchanges', component: Exchanges, name: 'Мои биржи'},
    {path: '/profile', component: Profile, name: 'Мои данные'},
    {path: '/preferences', component: Preferences, name: 'Preferences'},
    {path: '/2fa', component: TwoFactorAuth, name: '2 Factor Authentication'},
    {path: '/2fa-step-1', component: TwoFactorAuthStep1, name: '2fa-step-1'},
    {path: '/2fa-step-2', component: TwoFactorAuthStep2, name: '2fa-step-2'},
    {path: '/2fa-step-3', component: TwoFactorAuthStep3, name: '2fa-step-3'},
    {path: '/2fa-step-4', component: TwoFactorAuthStep4, name: '2fa-step-4'},
    {path: '/2fa-disable', component: TwoFactorAuthDisable, name: '2fa-disable'},
    {path: '/2fa-disabled', component: TwoFactorAuthDisabled, name: '2fa-disabled'},
    {path: '/select-exchange', component: SelectExchange, name: 'select-exchange', props: true},
    {path: '/select-exchange/:id', component: ExchangeConnect, name: 'ConnectExchange', props: true},
    {path: '/support', component: Support, name: 'Support', props: true},
    {path: '/ticket', component: Ticket, name: 'New Support Ticket', props: true},
    {path: '/ticket/:id', component: TicketMessaging, name: 'TicketMessaging', props: true},
    {path: '/faq', component: FAQ, name: 'FAQ', props: true},
    {path: '/faq/:id', component: FaqItem, name: 'FaqItem', props: true},
    {path: '/news', component: News, name: 'News', props: true},
    {path: '/news/:id', component: NewsItem, name: 'NewsItem', props: true},
    {path: '/markets', component: Markets, name: 'Markets', props: true},


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
    el: '#app'
});
