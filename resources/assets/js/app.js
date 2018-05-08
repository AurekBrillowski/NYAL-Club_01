import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import Vuetify from 'vuetify'
import Vuelidate from 'vuelidate'

import axios from 'axios'

axios.defaults.baseURL = 'http://nyal-laravel-01.dv:85';

Vue.use(Vuetify)
Vue.use(Vuelidate)

const app = new Vue({
	el: '#app',
	router: router,
	store: store,
	render: h => h(App)
});