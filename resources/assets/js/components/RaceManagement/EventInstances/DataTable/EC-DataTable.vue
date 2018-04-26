<template>
   <v-flex xs12 sm5 md7>
      <table>
         <tr>
            <th class="header_1">TH - 1</th>
            <th class="header_2">TH - 2</th>
            <th class="header_3">TH - 3</th>
            <th class="header_4">TH - 4</th>
         </tr>
         <!--<tr-->
         <!--v-for="organization in organizations"-->
         <!--:key="organization.id"-->
         <!--@click="selectRow(organization)"-->
         <!--:class="{ selected: selectedRow === organization }"-->
         <!--&gt;-->
            <!--<td>{{ organization.organization_name }}</td>-->
            <!--<td>{{ organization.organization_abbreviation }}</td>-->
            <!--<td>{{ organization.organization_website }}</td>-->
            <!--<td>{{ organization.rm_state }}</td>-->
         <!--</tr>-->
      </table>
   </v-flex>
</template>

<script>
	export default {
//		computed: {
//			organizations() {
//				return this.$store.getters.organizations;
//			},
//			selectedRow() {
//				return this.$store.state.organizations.selected;
//			},
//		},
//		created() {
//			this.$store.dispatch('initOrganizations')
//		},
//		methods: {
//			selectRow(organization) {
//				this.$store.commit('selectRow', organization);
//				console.log(organization);
//			},
//		}
	}
</script>

<style>

</style>