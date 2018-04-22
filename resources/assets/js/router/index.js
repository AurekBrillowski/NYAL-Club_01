import Vue from 'vue'
import Router from 'vue-router'
import KA_CRUD_Home from '../pages/CRUD/KA-CRUD-Home.vue'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'KA-CRUD-Home',
			component: KA_CRUD_Home
		}
	]
})
