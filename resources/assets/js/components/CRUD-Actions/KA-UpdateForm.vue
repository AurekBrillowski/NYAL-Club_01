<template>
   <v-flex xs12 sm5 md4>
      <ka-form v-model="valid" ref="form">
         <template slot="form_inputs">
            <v-layout row wrap>
               <v-flex xs8>
                  <v-text-field
                  label="Organization Name"
                  v-model="selectedRow.organization_name"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs4>
                  <v-select
                  :items="states"
                  label="State"
                  v-model="selectedRow.rm_state"
                  autocomplete
                  dense
                  hide-details
                  >
                  </v-select>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Organization Abbr."
                  v-model="selectedRow.organization_abbreviation"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-text-field
                  label="Organization Website"
                  v-model="selectedRow.organization_website"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Contact Name"
                  v-model="selectedRow.contact_name"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-text-field
                  label="Contact Phone"
                  v-model="selectedRow.contact_phone"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
            </v-layout>
         </template>
         <template slot="form_actions">
            <v-spacer></v-spacer>
            <v-btn color="red">
               Cancel
            </v-btn>
            <v-btn color="green" type="submit" @click.prevent="updateOrganization();">
               Save
            </v-btn>
         </template>
      </ka-form>
   </v-flex>
</template>

<script>
	import KAForm from '../Base/KA-Form.vue'
	export default {
		data() {
			return {
				valid: false,
				states: ['AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY'],
			}
		},
		computed: {
			selectedRow() {
				return this.$store.state.selected;
			}
		},
		methods: {
			updateOrganization() {
				var updatedSelectedRow = this.selectedRow;
				this.$store.dispatch('createOrUpdateOrganization', updatedSelectedRow)
			}
		},
		components: {
			'ka-form': KAForm
		}
	}
</script>

<style>

</style>