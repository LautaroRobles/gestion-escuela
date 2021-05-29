import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        user: {},
        establecimiento: {}
    },
    mutations: {
        establecimiento(state, _establecimiento) {
            state.establecimiento = _establecimiento;
        },
        user(state, _user) {
            state.user = _user;
        },
        logout(state) {
            state.establecimiento = null;
            state.user = null;
        }
    },
    plugins: [createPersistedState()]
})

export default store;
