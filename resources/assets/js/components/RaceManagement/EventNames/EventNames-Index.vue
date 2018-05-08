<template>
   <v-layout row wrap>
      <v-flex xs12>
         <en-table-filtering></en-table-filtering>
         <v-layout row justify-center>
            <create-action :triggerCreate="triggerEventNameCreation"></create-action>
            <en-delete-action></en-delete-action>
         </v-layout>
         <v-layout justify-center>
            <en-data-table></en-data-table>
            <en-update-form v-if="showUpdateForm"></en-update-form>
            <en-create-form v-if="showCreateForm"></en-create-form>
         </v-layout>
      </v-flex>
   </v-layout>
</template>

<script>
	import EN_CreateForm from './CRUD-Actions/EN-CreateForm.vue'
	import EN_UpdateForm from './CRUD-Actions/EN-UpdateForm.vue'
	import CreateAction from '../Shared/CreateAction.vue'
	import EN_DeleteAction from './CRUD-Actions/EN-DeleteAction.vue'
	import EN_DataTable from './DataTable/EN-DataTable.vue'
	import EN_DataTable_Filtering from './DataTable/EN-Table-Filtering.vue'
   import {mapState} from 'vuex'
	export default {
		components: {
			'en-create-form': EN_CreateForm,
			'en-update-form': EN_UpdateForm,
			'en-data-table': EN_DataTable,
			'en-table-filtering': EN_DataTable_Filtering,
			'create-action': CreateAction,
			'en-delete-action': EN_DeleteAction,
		},
		methods: {
		   triggerEventNameCreation() {
				this.$store.commit('triggerEventNameCreation')
			},
		},
		computed: {
          ...mapState([
          	'crudActions'
          ]),
			showUpdateForm() {
				return this.$store.state.eventNames.crudActions.update
			},
			showCreateForm() {
				return this.$store.state.eventNames.crudActions.create
			},
		},
	}
</script>

<style>

</style>