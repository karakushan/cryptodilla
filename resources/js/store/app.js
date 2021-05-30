import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        data: [],
        exchangeInfo: null,
        account: null,
        symbol: null,
        activeExchangeAccount: null,
        bots: {
            macd:{
                name: 'MACD',
                img: '/img/bots/quad_macd.svg',
                description: 'This strategy is based on the MACD indicator. It buys when the MACD line crosses above the signal line, and sells when defined exit condition is met.'
            }
        }
    },
    getters: {
        appData: state => {
            return state.data
        },
        exchangeInfo: state => {
            return state.exchangeInfo
        },
        account: state => {
            return state.account
        },
        symbol: state => {
            return state.symbol
        },
        activeExchangeAccount: state => {
            return state.activeExchangeAccount
        },
        bots: state => {
            return state.bots
        },

    },
    mutations: {
        SET_DATA(state, payload) {
            state.data = payload
        },
        SET_EXCHANGE_INFO(state, payload) {
            state.exchangeInfo = payload
        },
        SET_ACCOUNT(state, payload) {
            state.account = payload
        },
        SET_SYMBOL(state, payload) {
            state.symbol = payload
        },
        SET_ACTIVE_EXCHANGE_ACCOUNT(state, payload) {
            state.activeExchangeAccount = payload
        },
    },
    actions: {
        updateAppData({commit}){
            axios
                .get('/terminal/', {

                })
                .then(response => {
                    if (response.status == 200 && response.data) {
                        commit('SET_DATA', response.data);
                    }
                })
                .catch(error => {
                    // console.log(error.response);
                    console.log(error.response.data);
                })
                .finally(() => {
                    // Will be executed upon completion catch & then
                });
        },
        setData({commit}, payload) {
            commit('SET_DATA', payload);
        },
        setExchangeInfo({commit}, payload) {
            commit('SET_EXCHANGE_INFO', payload);
        },
        setAccount({commit}, payload) {
            commit('SET_ACCOUNT', payload);
        },
        setSymbol({commit}, payload) {
            commit('SET_SYMBOL', payload);
        },
        setActiveExchangeAccount({commit}, payload) {
            commit('SET_ACTIVE_EXCHANGE_ACCOUNT', payload);
            axios
             .post('/terminal/exchange/set-active-account', {
             	account:payload
             })
             .then(response => {
             	if (response.status == 200 && response.data) {

             	}
             })
             .catch(error => {
                // console.log(error.response);
             	console.log(error.response.data);
             })
             .finally(() => {
             // Will be executed upon completion catch & then
             });
        },
    }
})
