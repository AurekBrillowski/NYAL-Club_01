import Vue from 'vue'
import Vuex from 'vuex'

import getters from './getters'
import mutations from './mutations'
import actions from './actions'

Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		organizations: [],
		selected: {},
		searchQuery: '',
		crudActions: {
			create: false,
			edit: true
		},
		deleteDialog: true
	},
	getters: getters,
	mutations: mutations,
	actions: actions,
});