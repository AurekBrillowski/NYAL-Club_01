import api from '../../../utils/api'

const state = {
	eventContacts: []
};
const getters = {
	eventContacts: state => state.eventContacts,
};
const mutations = {
	initEventContacts(state, payload) { state.eventContacts = payload },
	createEventContact(state, newContact) { state.eventContacts.push(newContact); },
	updateEventContact(state, updatedContact) {
		let index = state.eventContacts.map(contact => contact.id).indexOf(updatedContact.id);
		state.eventContacts.splice(index, 1, updatedContact);
	},
	deleteEventContact(state, id) {
		let index = state.eventContacts.map(contact => contact.id).indexOf(id);
		state.eventContacts.splice(index, 1)
	},
};
const actions = {
	initEventContacts: ({commit}) => {
		api.eventContacts('/api/eventContacts').getAll()
			.then(response => {
				console.log(response)
				commit('initEventContacts', response.data)
			})
			.catch(error => console.log(error))
	},
	createEventContact: ({commit}, newContact) => {
		api.eventContacts('/api/eventContact').create(newContact)
			.then(response => {
				console.log(response)
				commit('createEventContact', response.data)
			})
			.catch(error => console.log(error))
	},
	updateEventContact: ({commit}, updatedContact) => {
		api.eventContacts('/api/eventContact').update(updatedContact)
			.then(response => {
				console.log(response)
				commit('updateEventContact', response.data)
			})
			.catch(error => console.log(error))
	},
	deleteEventContact: ({commit}, id) => {
		api.eventContacts('/api/eventContact').delete(id)
			.then(response => {
				console.log(response)
				commit('deleteEventContact', response.data.id)
			})
			.catch(error => console.log(error))
	},
};

export default {
	state,
	getters,
	mutations,
	actions,
}