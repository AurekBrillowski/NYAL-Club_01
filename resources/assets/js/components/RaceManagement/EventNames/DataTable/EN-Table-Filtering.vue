<template>
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
                  <v-layout row wrap>
                     <v-flex xs2>
                        <v-radio-group label="Season">
                           <v-radio v-for="season in seasons" :key="season.text" :label="season.text" :value="season.value"></v-radio>
                        </v-radio-group>
                     </v-flex>
                     <v-flex xs3>
                        <v-radio-group label="Event Type">
                           <v-radio v-for="type in eventTypes" :key="type.text" :label="type.text" :value="type.value"></v-radio>
                        </v-radio-group>
                     </v-flex>
                     <v-flex xs5>
                        <v-radio-group label="Event Organizations">
                           <v-radio v-for="org in organizations" :key="org.id" :label="org.organization_name" :value="org.id"></v-radio>
                        </v-radio-group>
                     </v-flex>
                  </v-layout>
               </v-flex>
            </v-card-text>
         </v-card>
      </v-expansion-panel-content>
   </v-expansion-panel>
</template>

<script>
   import {mapGetters} from 'vuex'
	export default {
	   computed: {
		   ...mapGetters([
			   'eventTypes',
			   'seasons',
            'organizations',
		   ]),
//         sort_by: {
//		   	get() {
//		   		return this.$store.state.eventNames.tableFilters.sort_by;
//            },
//            set(value) {
//		   		this.$store.commit('sort_by', value)
//            },
//         },
//	      sort_order: {
//		      get() {
//			      return this.$store.state.eventNames.tableFilters.sort_prder;
//		      },
//		      set(value) {
//			      this.$store.commit('sort_order', value)
//		      },
//	      },
      },
   }
</script>

<style>

</style>