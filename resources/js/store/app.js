import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        data: []
    },
    getters: {
        appData: state => {
            return state.data
        }
    },
    mutations: {
        SET_DATA(state, payload) {
            state.data = payload
        }
    },
    actions: {
        setData({commit}, payload) {
            commit('SET_DATA', payload);
        }
    }
})
