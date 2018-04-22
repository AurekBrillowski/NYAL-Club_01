<template>
   <v-slide-y-transition mode="out-in">
      <v-container fluid grid-list-xl>
         <v-layout row justify-center>
            <ka-create-action></ka-create-action>
            <ka-delete-action></ka-delete-action>
         </v-layout>
         <v-layout justify-center>
            <ka-data-table></ka-data-table>
            <ka-create-form v-if="createAction"></ka-create-form>
            <ka-update-form v-if="editAction"></ka-update-form>
         </v-layout>
      </v-container>
   </v-slide-y-transition>
</template>

<script>
	import KA_CreateForm from '../../components/CRUD-Actions/KA-CreateForm.vue'
	import KA_UpdateForm from '../../components/CRUD-Actions/KA-UpdateForm.vue'
	import KA_DataTable from '../../components/DataTable/KA-DataTable.vue'
	import KA_CreateAction from '../../components/CRUD-Actions/KA-CreateAction.vue'
	import KA_DeleteAction from '../../components/CRUD-Actions/KA-DeleteAction.vue'
	export default {
		data() {
			return {}
		},
       computed: {
			createAction() {
			 return this.$store.state.crudActions.create
		 },
			editAction() {
				return this.$store.state.crudActions.edit
         },
       },
		components: {
			'ka-create-form': KA_CreateForm,
			'ka-update-form': KA_UpdateForm,
			'ka-data-table': KA_DataTable,
			'ka-create-action': KA_CreateAction,
			'ka-delete-action': KA_DeleteAction,
		},
	}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>
