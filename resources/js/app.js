import Vue from 'vue'
import router from '@/plugins/router'
import vuetify from '@/plugins/vuetify' // path to vuetify export

import App from '@/views/App.vue'

const app = new Vue({
    el: '#app',
    components: { App },
    vuetify,
    router
});