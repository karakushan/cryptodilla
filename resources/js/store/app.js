import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        data: {...window.appData},
        exchangeInfo: null,
        account: null,
        symbol: {
            symbol: 'BTCUSDT',
            baseAsset: 'BTC',
            quoteAsset: 'USDT',
            logo_url: '/storage/avatars/6aw8CvZCXvdYXJInCp4nUCCXdIsEg7TtGuryY2rq.svg'
        },
        activeExchangeAccount: null,
        bots: {
            macd: {
                name: 'MACD',
                img: '/img/bots/quad_macd.svg',
                description: 'This strategy is based on the MACD indicator. It buys when the MACD line crosses above the signal line, and sells when defined exit condition is met.'
            }
        },
        symbolTick: null,
        exchange: 'binance',
        trades: null,
        depths: {},
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
        symbolTick: state => {
            return state.symbolTick
        },
        exchange: state => {
            return state.exchange
        },
        trades: state => {
            return state.trades
        },
        depths: state => {
            return state.depths
        },

    },
    mutations: {
        SET_DEPTHS(state, payload) {
            state.depths = payload
        },
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
        SET_SYMBOL_TICK(state, payload) {
            state.symbolTick = payload
        },
        SET_EXCHANGE(state, payload) {
            state.exchange = payload
        },
        SET_TRADES(state, payload) {
            state.trades = payload
        },
    },
    actions: {
        SET_TRADES({commit}, payload) {
            commit('SET_TRADES', payload);
        },
        SET_DEPTHS({commit}, payload) {
            commit('SET_DEPTHS', payload);
        },
        updateAppData({commit}) {
            axios
                .get('/terminal/', {})
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
        setExchange({commit}, payload) {
            commit('SET_EXCHANGE', payload);
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
        setSymbolTick({commit}, payload) {
            commit('SET_SYMBOL_TICK', payload);
        },
        setActiveExchangeAccount({commit}, payload) {
            commit('SET_ACTIVE_EXCHANGE_ACCOUNT', payload);
            commit('SET_EXCHANGE', payload.exchange_slug);
            axios
                .post('/terminal/exchange/set-active-account', {
                    account: payload
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
