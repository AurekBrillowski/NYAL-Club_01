<template>
   <v-flex xs12 sm5 md7>
      <table class="event-org-table">
         <tr>
            <th class="header_1">Name</th>
            <th class="header_2">Abbr.</th>
            <th class="header_3">Website</th>
            <th class="header_4">State</th>
         </tr>
         <tr
         v-for="organization in organizations"
         :key="organization.id"
         @click="selectRow(organization)"
         :class="{ selected: selectedRow === organization }"
         >
            <td>{{ organization.organization_name }}</td>
            <td>{{ organization.organization_abbreviation }}</td>
            <td>{{ organization.organization_website }}</td>
            <td>{{ organization.rm_state }}</td>
         </tr>
      </table>
   </v-flex>
</template>

<script>
	export default {
   	data() {
   		return {}
      },
		computed: {
		  organizations() {
				return this.$store.getters.organizations;
			},
			selectedRow() {
				return this.$store.state.eventOrganizations.selected;
			},
		},
//       created() {
//			this.$store.dispatch('initOrganizations')
//       },
		methods: {
			selectRow(organization) {
				this.$store.commit('selectRow', organization);
				console.log(organization);
			},
		}
	}
</script>

<style scoped>
   .event-org-table {
      width: 95%;
   }
   .header_1 {
      width: 250px;
   }
   .header_2 {
      width: 100px;
   }
   .header_3 {
      width: 120px;
   }
   .header_4 {
      width: 80px;
   }
</style>