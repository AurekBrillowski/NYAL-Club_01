import Vue from 'vue'
import Vuex from 'vuex'

import eventOrganizations from './modules/RaceManagement/eventOrganizations'
Vue.use(Vuex)

export default new Vuex.Store({
	strict: true,
	state: {
		abbrvStates: ['AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY'],
		deleteDialog: false
	},
	getters: {
		abbrvStates(state) { return state.abbrvStates; }
	},
	mutations: {
		submitDelete(state, payload) {
			state.deleteDialog = payload
		}
	},
	modules: {
		eventOrganizations,
	}
});