<template>
   <v-layout row wrap>
      <v-flex xs12>
         <v-expansion-panel>
            <v-expansion-panel-content class="blue" hide-actions>
               <div slot="header" class="headline text-md-center">L1 - Event Organizations</div>
               <v-card>
                  <v-card-text>
                     This is some example text.
                  </v-card-text>
               </v-card>
            </v-expansion-panel-content>
         </v-expansion-panel>
         <v-layout row justify-center>
            <v-flex xs1>
               <create-action :triggerCreate="triggerCreateAction"></create-action>
            </v-flex>
            <v-flex xs1>
               <eo-delete-action></eo-delete-action>
            </v-flex>
         </v-layout>
         <v-layout justify-center>
            <eo-data-table></eo-data-table>
            <eo-create-form v-if="createAction"></eo-create-form>
            <eo-update-form v-if="editAction"></eo-update-form>
         </v-layout>
      </v-flex>
   </v-layout>
</template>

<script>
	import EO_CreateForm from './CRUD-Actions/EO-CreateForm.vue'
	import EO_UpdateForm from './CRUD-Actions/EO-UpdateForm.vue'
   import EO_DeleteAction from './CRUD-Actions/EO-DeleteAction.vue'
   import CreateAction from '../Shared/CreateAction.vue'
	import EO_DataTable from './DataTable/EO-DataTable.vue'
	export default {
		data() {
			return {
				showDeleteDialog: false
         }
		},
       methods: {
	       triggerCreateAction() {
		       this.$store.commit('triggerCreateAction')
	       },
       },
		computed: {
			createAction() {
				return this.$store.state.eventOrganizations.crudActions.create
			},
			editAction() {
				return this.$store.state.eventOrganizations.crudActions.edit
			},
		},
		components: {
			'eo-create-form': EO_CreateForm,
			'eo-update-form': EO_UpdateForm,
			'eo-data-table': EO_DataTable,
			'eo-delete-action': EO_DeleteAction,
			'create-action': CreateAction,
		},
	}
</script>