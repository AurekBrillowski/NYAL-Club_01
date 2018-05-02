import api from '../../../utils/api'

const state = {
	organizations: [],
	selected: {},
	searchQuery: '',
	crudActions: { create: false, edit: true },
	deleteDialog: true
};
const getters = {
	organizations: state => { return state.organizations; },
};
const mutations = {
	selectFirstRow(state, payload) { state.selected = payload; state.deleteDialog = false; state.crudActions.create = false; },
	selectRow(state, payload) { state.selected = payload; state.deleteDialog = false },
	initOrganizations(state, payload) { state.organizations = payload; },
	triggerCreateAction(state) { state.crudActions.create = true; state.crudActions.edit = false; },
	cancelCreateAction(state) { state.crudActions.create = false; state.crudActions.edit = true; },
	createOrganization(state, newOrganization) { state.organizations.push(newOrganization); },
	updateOrganizationName(state, updatedValue) { state.selected.organization_name = updatedValue },
	updateOrganizationAbbrv(state, updatedValue) { state.selected.organization_abbreviation = updatedValue },
	updateOrganizationWebsite(state, updatedValue) { state.selected.organization_website = updatedValue },
	updateContactName(state, updatedValue) { state.selected.contact_name = updatedValue },
	updateContactPhone(state, updatedValue) { state.selected.contact_phone = updatedValue },
	updateRMState(state, updatedValue) { state.selected.rm_state = updatedValue },
	updateOrganization(state, updatedOrganization) {
		let index = state.organizations.map(org => org.id).indexOf(updatedOrganization.id);
		state.organizations.splice(index, 1, updatedOrganization);
	},
	deleteOrganization(state, id) {
		let index = state.organizations.map(org => org.id).indexOf(id);
		state.organizations.splice(index, 1)
	},
	resetState(state) {
		state.selected = {};
		state.deleteDialog = true;
		state.crudActions.create = false;
		state.crudActions.edit = true;
	}
};
const actions = {
	initOrganizations: ({commit}) => {
		api.eventOrganizations('/api/event_organizations').getAll()
			.then(response => {
				console.log(response)
				commit('initOrganizations', response.data)
				commit('selectFirstRow', response.data[0])
			})
			.catch(error => {
				console.log(error)
			})
	},
	createOrganization: ({commit}, newOrganization) => {
		api.eventOrganizations('/api/event_organization').create(newOrganization)
			.then(response => {
				commit('createOrganization', response.data)
				commit('resetState')
			})
			.catch(error => console.log(error))
	},
	updateOrganization({commit}, updatedOrganization) {
		api.eventOrganizations('/api/event_organization').update(updatedOrganization)
			.then(response => {
				commit('updateOrganization', response.data)
				commit('resetState')
			})
			.catch(error => console.log(error))
	},
	deleteOrganization: ({commit}, id) => {
		api.eventOrganizations('/api/event_organization').delete(id)
			.then(response => {
				console.log(response.data.id);
				commit('deleteOrganization', response.data.id);
				commit('resetState')
			})
			.catch(error => console.log(error))
	}
};

export default {
	state,
	getters,
	mutations,
	actions
}