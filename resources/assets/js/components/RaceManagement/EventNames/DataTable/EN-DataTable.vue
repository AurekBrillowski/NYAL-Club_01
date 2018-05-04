<template>
   <v-flex xs12 sm5 md7>
      <table class="fixed_header">
         <thead>
            <tr>
               <th>Event Name</th>
               <th>Season</th>
               <th>Type</th>
               <th>Website</th>
            </tr>
         </thead>
         <tbody>
            <tr
            v-for="eventName in filteredEventNames"
            :key="eventName.id"
            >
               <td>{{ eventName.event_name }}</td>
               <td>{{ eventName.NYAL_Season_id | showSeason }}</td>
               <td>{{ eventName.Event_Type_id }}</td>
               <td>{{ eventName.race_website }}</td>
            </tr>
         </tbody>
      </table>
   </v-flex>
</template>

<script>
	export default {
		computed: {
			eventNames() {
				return this.$store.getters.eventNames;
			},
//			selectedRow() {
//				return this.$store.state.organizations.selected;
//			},
         filteredEventNames() {
				let selectedOrganization = this.$store.state.eventOrganizations.selected;
				return this.$store.getters.eventNames.filter(name => {
					return name.Event_Organization_id === selectedOrganization.id;
            });
         },
		},
       filters: {
			showSeason(value) {
				if (value === 1) {
					return value = 'Spring'
            } else if (value === 2) {
					return value = 'Summer'
            } else if (value === 3) {
					return value = 'Fall'
            }
         },
       },
	}
</script>

<style scoped>
</style>