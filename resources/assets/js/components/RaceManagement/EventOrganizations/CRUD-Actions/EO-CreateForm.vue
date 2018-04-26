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
                  @blur="$v.newOrganization.organization_name.$touch()"
                  :error="$v.newOrganization.organization_name.$error"
                  autofocus
                  hide-details
                  required
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
                  @blur="$v.newOrganization.organization_website.$touch()"
                  :error="$v.newOrganization.organization_website.$error"
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
                  @blur="$v.newOrganization.contact_name.$touch()"
                  :error="$v.newOrganization.contact_name.$error"
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
               <pre> newOrganization: {{ $v.newOrganization }} </pre>
            </v-layout>
         </template>
         <template slot="form_actions">
            <v-spacer></v-spacer>
            <v-btn color="red" @click="cancelCreate">
               Cancel
            </v-btn>
            <v-btn color="green" @click="createOrganization" :disabled="$v.$invalid">
               Submit
            </v-btn>
         </template>
      </ka-form>
   </v-flex>
</template>

<script>
	import KAForm from '../../../Base/KA-Form.vue'
   import { required, maxLength, url } from 'vuelidate/lib/validators'
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
			}
		},
		methods: {
			cancelCreate() {
				this.$store.commit('cancelCreateAction')
			},
			createOrganization() {
				this.$store.dispatch('createOrganization', this.newOrganization)
			},
		},
	   validations: {
		   newOrganization: {
			   organization_name: {
				   required: required
			   },
			   organization_abbreviation: {},
			   organization_website: {
			   	required: required,
               url: url
            },
			   contact_name: {
			   	required: required
            },
			   contact_phone: {},
		   }
	   },
       computed: {
	       states() { return this.$store.getters.abbrvStates; }
       },
		components: {
			'ka-form': KAForm
		}
	}
</script>