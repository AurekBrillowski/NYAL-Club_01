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
			})
			.catch(error => console.log(error))
	},
	updateOrganization({commit}, updatedOrganization) {
		// axios.put('http://nyal-laravel.dv:85/api/organization/' + updatedOrganization.id)
		axios.put('http://nyal-laravel.dv:85/api/organization', {
			id: updatedOrganization.id,
			organization_name: updatedOrganization.organization_name,
			organization_abbreviation: updatedOrganization.organization_abbreviation,
			organization_website: updatedOrganization.organization_website,
			contact_name: updatedOrganization.contact_name,
			contact_phone: updatedOrganization.contact_phone,
			rm_state: updatedOrganization.rm_state,
			// _method: 'PUT',
		})
			.then(response => {
				console.log(response.data)
				commit('updateOrganization', response.data)
			})
			// .catch(error => console.log(error))
			.catch(function (error) {
				if (error.response) {
					// The request was made and the server responded with a status code
					// that falls out of the range of 2xx
					console.log(error.response.data);
					console.log(error.response.status);
					console.log(error.response.headers);
				} else if (error.request) {
					// The request was made but no response was received
					// `error.request` is an instance of XMLHttpRequest in the browser and an instance of
					// http.ClientRequest in node.js
					console.log(error.request);
				} else {
					// Something happened in setting up the request that triggered an Error
					console.log('Error', error.message);
				}
				console.log(error.config);
			});
	},
	deleteOrganization({commit}, id) {
		axios.delete('http://nyal-laravel.dv:85/api/organization/' + id)
			.then(response => {
				console.log(response.data)
				commit('deleteOrganization', response.data.id)
			})
			.catch(error => console.log(error))
	}
}
