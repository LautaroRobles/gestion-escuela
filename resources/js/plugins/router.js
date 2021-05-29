import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Navigation from '@/components/NavAppBar'
import Home from '@/views/Home'
import Login from '@/views/Login'
import Alumnos from '@/views/Alumnos'

import store from '@/plugins/vuex'
import axios from 'axios'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            components: {
                view: Home,
                navigation: Navigation
            },
            meta: {
                display_name: 'Inicio'
            }
        },
        {
            path: '/alumnos',
            name: 'alumnos',
            components: {
                view: Alumnos,
                navigation: Navigation
            },
            meta: {
                display_name: 'Alumnos',
                color: 'orange darken-3'
            }
        },
        {
            path: '/login',
            name: 'login',
            components: {
                view: Login
            },
            meta: {
                noAuthRequired: true
            }
        }
    ]
});

router.beforeEach((to, from, next) => {
    var user_token = store.state.user ? store.state.user.token : null;

    if((!to.meta || !to.meta.noAuthRequired) && !user_token) {
        next({name: 'login'});
    }

    if(to.name == 'login' && user_token) {
        next({name: 'home'})
    }

    axios.defaults.headers.common['Authorization'] = `Bearer ${user_token}`;

    next();
});

export default router
