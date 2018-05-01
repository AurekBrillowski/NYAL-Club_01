import Vue from 'vue'
import Router from 'vue-router'
import NYAL_RaceManagement from '../pages/RaceManagement/NYAL-RaceManagement.vue'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		{
			// path: '/race-management',
			path: '/',
			name: 'race-management',
			component: NYAL_RaceManagement
		}
	]
})
