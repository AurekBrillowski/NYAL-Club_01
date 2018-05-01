<template>
   <v-layout row wrap>
      <v-flex xs12>
         <v-expansion-panel>
            <v-expansion-panel-content class="blue" hide-actions>
               <div slot="header" class="headline text-md-center">L2a - Event Contacts</div>
               <v-card>
                  <v-card-text>
                     This is some example text.
                  </v-card-text>
               </v-card>
            </v-expansion-panel-content>
         </v-expansion-panel>
         <v-layout row justify-center>
            <!--<ec-create-action></ec-create-action>-->
            <!--<ec-delete-action></ec-delete-action>-->
         </v-layout>
         <v-layout justify-center>
            <ec-data-table></ec-data-table>
            <!--<ec-create-form v-if="createAction"></ec-create-form>-->
            <ec-update-form></ec-update-form>
         </v-layout>
      </v-flex>
   </v-layout>
</template>

<script>
//	import EC_CreateForm from './CRUD-Actions/EC-CreateForm.vue'
	import EC_UpdateForm from './CRUD-Actions/EC-UpdateForm.vue'
//	import EC_CreateAction from './CRUD-Actions/EC-CreateAction.vue'
//	import EC_DeleteAction from './CRUD-Actions/EC-DeleteAction.vue'
	import EC_DataTable from './DataTable/EC-DataTable.vue'
	export default {
		components: {
//		  'ec-create-form': EC_CreateForm,
		  'ec-update-form': EC_UpdateForm,
		  'ec-data-table': EC_DataTable,
//		  'ec-create-action': EC_CreateAction,
//		  'ec-delete-action': EC_DeleteAction,
      }
   }
</script>

<style>

</style>