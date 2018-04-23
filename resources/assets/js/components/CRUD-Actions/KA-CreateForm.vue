<template>
   <v-flex xs12 sm5 md4>
      <v-alert type="success" dismissible v-model="successAlert">Successfully added Organization.</v-alert>
      <ka-form ref="updateForm">
         <template slot="form_inputs">
            <v-layout row wrap>
               <v-flex xs8>
                  <v-text-field
                  label="Organization Name"
                  v-model="newOrganization.organization_name"
                  autofocus
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs4>
                  <v-select
                  :items="states"
                  label="State"
                  v-model="newOrganization.rm_state"
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
                  v-model="newOrganization.organization_abbreviation"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-text-field
                  label="Organization Website"
                  v-model="newOrganization.organization_website"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Contact Name"
                  v-model="newOrganization.contact_name"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-text-field
                  label="Contact Phone"
                  mask="(###) ###-####"
                  v-model="newOrganization.contact_phone"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
            </v-layout>
         </template>
         <template slot="form_actions">
            <v-spacer></v-spacer>
            <v-btn color="red" @click="cancelCreate">
               Cancel
            </v-btn>
            <v-btn color="green" @click="createOrganization" :disabled="disableSubmit">
               Submit
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
				newOrganization: {
					organization_name: '',
					organization_abbreviation: '',
					organization_website: '',
					contact_name: '',
					contact_phone: '',
               rm_state: 'TX',
            },
             successAlert: false,
			 states: ['AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY'],
			}
		},
		methods: {
			cancelCreate() {
				this.$store.commit('cancelCreateAction')
			},
			createOrganization() {
				this.$store.dispatch('createOrUpdateOrganization', this.newOrganization)
//             this.successAlert = true;
			},
		},
       computed: {
			disableSubmit() {
				if (this.newOrganization.organization_name.length > 0) {
					return false;
            } else {
					return true;
            }
         }
       },
		components: {
			'ka-form': KAForm
		}
	}
</script>

<style>

</style>