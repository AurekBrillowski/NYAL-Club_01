<template>
   <v-flex xs12 sm5 md7>
      <table>
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
		computed: {
		  organizations() {
				return this.$store.getters.organizations;
			},
			selectedRow() {
				return this.$store.state.organizations.selected;
			},
		},
       created() {
			this.$store.dispatch('initOrganizations')
       },
		methods: {
			selectRow(organization) {
				this.$store.commit('selectRow', organization);
				console.log(organization);
			},
		}
	}
</script>

<style>

</style>