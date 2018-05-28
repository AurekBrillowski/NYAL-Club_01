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
               <v-btn
                  color="red"
                  @click.native.stop="showDeleteDialog = true"
                  :disabled="deleteTrigger"
               >
                  Delete
               </v-btn>
               <eo-delete-dialog :dialog="showDeleteDialog" :submitAction="deleteOrganization" @close="showDeleteDialog = false">
                  Are you sure you want to delete this organization?
               </eo-delete-dialog>
            </v-flex>
         </v-layout>
         <v-layout justify-center>
            <eo-data-table></eo-data-table>
            <create-organization v-if="createAction"></create-organization>
            <update-organization v-if="editAction"></update-organization>
         </v-layout>
      </v-flex>
   </v-layout>
</template>

<script>
	import CreateOrganization from './CreateOrganization.vue'
	import UpdateOrganization from './UpdateOrganization.vue'
   import EO_DataTable from './DataTable.vue'
   import Dialog from '../Shared/KA-Dialog.vue'
   import CreateAction from '../Shared/CreateAction.vue'
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
	       deleteOrganization() {
		       this.$store.dispatch('deleteOrganization', this.$store.state.eventOrganizations.selected.id);
		       this.showDeleteDialog = false;
	       }
       },
	   computed: {
		   createAction() {
			   return this.$store.state.eventOrganizations.crudActions.create
		   },
		   editAction() {
			   return this.$store.state.eventOrganizations.crudActions.edit
		   },
		   deleteTrigger() {
			   return this.$store.state.eventOrganizations.deleteDialog;
		   },
	   },
		components: {
			'create-organization': CreateOrganization,
			'update-organization': UpdateOrganization,
			'eo-data-table': EO_DataTable,
			'eo-delete-dialog': Dialog,
			'create-action': CreateAction,
		},
	}
</script>