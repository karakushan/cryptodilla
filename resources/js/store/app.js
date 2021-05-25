import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        data: [],
        exchangeInfo:null,
        account:null,
        symbol:null
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
    },
    actions: {
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
    }
})
