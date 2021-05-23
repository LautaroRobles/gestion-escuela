import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Navigation from '@/components/NavAppBar'
import Home from '@/views/Home'
import Login from '@/views/Login'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            components: {
                view: Home,
                navigation: Navigation
            }
        },
        {
            path: '/login',
            name: 'login',
            components: {
                view: Login
            }
        }
    ],
});

export default router