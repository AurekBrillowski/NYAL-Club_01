<template>
   <v-flex xs12 sm5 md4>
      <ka-form>
         <template slot="form_inputs">
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Event Name"
                  v-model="eventName"
                  autofocus
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-select
                  label="Event Organization"
                  v-model="eventOrganization"
                  :items="this.$store.state.eventOrganizations.organizations"
                  item-text="organization_name"
                  item-value="id"
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
                  label="Race Website"
                  v-model="eventWebsite"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-select
                  v-model="eventType"
                  :items="eventTypes"
                  label="Event Type"
                  item-value="value"
                  autocomplete
                  dense
                  hide-details
                  >
                  </v-select>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-select
                  v-model="eventSeason"
                  :items="seasons"
                  label="Season"
                  item-value="value"
                  autocomplete
                  dense
                  hide-details
                  >
                  </v-select>
               </v-flex>
               <v-flex xs6>
                  <v-checkbox label="Club Race" v-model="eventClubRace" true-value="1" false-value="0" hide-details></v-checkbox>
                  <v-checkbox label="School Race" v-model="eventSchoolRace" true-value="1" false-value="0" hide-details></v-checkbox>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Current Year"
                  v-model="eventCurrentYear"
                  mask="####-##-##"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-select
                  v-model="eventMonth"
                  :items="months"
                  item-value="value"
                  label="Month"
                  autocomplete
                  dense
                  hide-details
                  ></v-select>
               </v-flex>
            </v-layout>
         </template>
         <template slot="form_actions">
            <v-spacer></v-spacer>
            <v-btn color="red">
               Cancel
            </v-btn>
            <v-btn color="green" @click="updateEvent">
               Save
            </v-btn>
         </template>
      </ka-form>
   </v-flex>
</template>

<script>
	import KAForm from '../../../Base/KA-Form.vue'
	export default {
	   computed: {
		   eventName: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.event_name
			   },
			   set(value) {
				   this.$store.commit('updateEventName', value)
			   }
		   },
		   eventOrganization: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.Event_Organization_id
			   },
			   set(value) {
				   this.$store.commit('updateEventOrg', value)
			   }
		   },
		   eventWebsite: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.race_website
			   },
			   set(value) {
				   this.$store.commit('updateEventWebsite', value)
			   }
		   },
		   eventType: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.Event_Type_id
			   },
			   set(value) {
				   this.$store.commit('updateEventType', value)
			   }
		   },
		   eventSeason: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.NYAL_Season_id
			   },
			   set(value) {
				   this.$store.commit('updateEventSeason', value)
			   }
		   },
		   eventClubRace: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.club_race
			   },
			   set(value) {
				   this.$store.commit('updateEventClubRace', value)
			   }
		   },
		   eventSchoolRace: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.school_race
			   },
			   set(value) {
				   this.$store.commit('updateEventSchoolRace', value)
			   }
		   },
		   eventCurrentYear: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.current_year_date
			   },
			   set(value) {
				   this.$store.commit('updateEventCurrentYear', value)
			   }
		   },
		   eventMonth: {
			   get() {
				   return this.$store.state.eventNames.selectedRow.month_id
			   },
			   set(value) {
				   this.$store.commit('updateEventMonth', value)
			   }
		   },
	      months() {
		      return this.$store.state.eventNames.months;
	      },
	      eventTypes() {
		      return this.$store.state.eventNames.eventTypes;
	      },
	      seasons() {
		      return this.$store.state.eventNames.seasons;
	      },
	   },
		methods: {
		  updateEvent() {
				let updatedSelectedRow = this.$store.state.eventNames.selectedRow;
				this.$store.dispatch('updateEvent', updatedSelectedRow)
			}
		},
		components: {
			'ka-form': KAForm
		}
	}
</script>