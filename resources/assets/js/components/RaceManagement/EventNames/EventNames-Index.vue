<template>
   <v-layout row wrap>
      <v-flex xs12>
         <v-expansion-panel>
            <v-expansion-panel-content class="blue" hide-actions>
               <div slot="header" class="headline text-md-center">L2b - Event Names</div>
               <v-card>
                  <v-card-text>
                     <v-flex xs10>
                        <v-layout row wrap>
                           <v-flex xs4>
                              <v-text-field append-icon="search" label="Search Event Names" hide-details></v-text-field>
                           </v-flex>
                        </v-layout>
                     </v-flex>
                  </v-card-text>
               </v-card>
            </v-expansion-panel-content>
         </v-expansion-panel>
         <v-layout row justify-center>
            <!--<en-create-action></en-create-action>-->
            <!--<en-delete-action></en-delete-action>-->
         </v-layout>
         <v-layout justify-center>
            <en-data-table></en-data-table>
            <en-create-form></en-create-form>
            <!--<en-update-form></en-update-form>-->
         </v-layout>
      </v-flex>
   </v-layout>
</template>

<script>
    import EN_CreateForm from './CRUD-Actions/EN-CreateForm.vue'
    import EN_UpdateForm from './CRUD-Actions/EN-UpdateForm.vue'
//	import EN_CreateAction from './CRUD-Actions/EN-CreateAction.vue'
//	import EN_DeleteAction from './CRUD-Actions/EN-DeleteAction.vue'
	import EN_DataTable from './DataTable/EN-DataTable.vue'
	export default {
		components: {
		   'en-create-form': EN_CreateForm,
			'en-update-form': EN_UpdateForm,
			'en-data-table': EN_DataTable,
//			'en-create-action': EN_CreateAction,
//			'en-delete-action': EN_DeleteAction,
		}
	}
</script>

<style>

</style>