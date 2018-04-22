import axios from 'axios'

export default {
	getOrganizations({commit}) {
		axios.get('http://nyal-laravel.dv:85/api/organizations')
			.then(response => {
				console.log(response)
				commit('getOrganizations', response.data)
				commit('selectFirstRow', response.data[0])
			})
			.catch(error => {
				console.log(error)
			})
	},
	createOrUpdateOrganization({state, dispatch}, organization) {
		if(state.crudActions.edit === false) {
			dispatch('createOrganization', organization)
		} else {
			dispatch('updateOrganization', organization)
		}
	},
	createOrganization({commit}, newOrganization) {
		axios.post('http://nyal-laravel.dv:85/api/organization', newOrganization)
			.then(response => {
				console.log(response);
				commit('createOrganization', response.data)
				commit('resetState')
			})
			.catch(error => console.log(error))
	},
	updateOrganization({commit}, updatedOrganization) {
		axios.put('http://nyal-laravel.dv:85/api/organization', updatedOrganization)
			.then(response => {
				console.log(response.data)
				commit('updateOrganization', response.data)
				commit('resetState')
			})
			.catch(function (error) {
				if (error.response) {
					console.log(error.response.data);
					console.log(error.response.status);
					console.log(error.response.headers);
				} else if (error.request) {
					console.log(error.request);
				} else {
					console.log('Error', error.message);
				}
				console.log(error.config);
			});
	},
	deleteOrganization({commit}, id) {
		axios.delete('http://nyal-laravel.dv:85/api/organization/' + id)
			.then(response => {
				// console.log(response.data)
				commit('deleteOrganization', response.data.id)
				commit('resetState')
			})
			.catch(error => console.log(error))
	}
}
