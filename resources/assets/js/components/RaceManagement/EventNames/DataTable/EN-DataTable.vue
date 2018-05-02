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
         <!--v-for="eventName in eventNames"-->
         <!--:key="eventName.id"-->
         <!--&gt;-->
            <!--<td>{{ eventName.organization_name }}</td>-->
            <!--<td>{{ eventName.organization_abbreviation }}</td>-->
            <!--<td>{{ eventName.organization_website }}</td>-->
            <!--<td>{{ eventName.rm_state }}</td>-->
         <!--</tr>-->
      </table>
   </v-flex>
</template>

<script>
	export default {
		computed: {
			organizations() {
				return this.$store.getters.organizations;
			},
//			selectedRow() {
//				return this.$store.state.organizations.selected;
//			},
		},
		created() {
			this.$store.dispatch('initEventNames')
		},
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