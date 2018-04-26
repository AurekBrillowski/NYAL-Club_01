<template>
   <v-flex xs12 sm5 md4>
      <ka-form>
         <template slot="form_inputs">
            <v-layout row wrap>
               <v-flex xs8>
                  <v-text-field
                  label="Organization Name"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs4>
                  <v-text-field
                  label="State"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Organization Abbr."
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-text-field
                  label="Organization Website"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Contact Name"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-text-field
                  label="Contact Phone"
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
            <v-btn color="green">
               Save
            </v-btn>
         </template>
      </ka-form>
   </v-flex>
</template>

<script>
	import KAForm from '../../../Base/KA-Form.vue'
	export default {
//		computed: {
//			organizationName: {
//				get() {
//					return this.$store.state.organizations.selected.organization_name
//				},
//				set(value) {
//					this.$store.commit('updateOrganizationName', value)
//				}
//			},
//			organizationAbbrv: {
//				get() {
//					return this.$store.state.organizations.selected.organization_abbreviation
//				},
//				set(value) {
//					this.$store.commit('updateOrganizationAbbrv', value)
//				}
//			},
//			organizationWebsite: {
//				get() {
//					return this.$store.state.organizations.selected.organization_website
//				},
//				set(value) {
//					this.$store.commit('updateOrganizationWebsite', value)
//				}
//			},
//			contactName: {
//				get() {
//					return this.$store.state.organizations.selected.contact_name
//				},
//				set(value) {
//					this.$store.commit('updateContactName', value)
//				}
//			},
//			contactPhone: {
//				get() {
//					return this.$store.state.organizations.selected.contact_phone
//				},
//				set(value) {
//					this.$store.commit('updateContactPhone', value)
//				}
//			},
//			rmState: {
//				get() {
//					return this.$store.state.organizations.selected.rm_state
//				},
//				set(value) {
//					this.$store.commit('updateRMState', value)
//				}
//			},
//			states() { return this.$store.getters.abbrvStates; }
//		},
//		methods: {
//			updateOrganization() {
//				var updatedSelectedRow = this.$store.state.organizations.selected;
//				this.$store.dispatch('updateOrganization', updatedSelectedRow)
//			}
//		},
		components: {
			'ka-form': KAForm
		}
	}
</script>