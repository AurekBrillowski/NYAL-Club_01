<template>
   <v-flex xs12 sm5 md4>
      <ka-form ref="updateForm">
         <template slot="form_inputs">
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Event Name"
                  v-model="newEvent.event_name"
                  autofocus
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-select
                  label="Event Organization"
                  v-model="newEvent.Event_Organization_id"
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
                  v-model="newEvent.race_website"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-select
                     v-model="newEvent.Event_Type_id"
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
                     v-model="newEvent.NYAL_Season_id"
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
                  <v-checkbox label="Club Race" v-model="newEvent.club_race" hide-details></v-checkbox>
                  <v-checkbox label="School Race" v-model="newEvent.school_race" hide-details></v-checkbox>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Current Year"
                  v-model="newEvent.current_year_date"
                  hide-details
                  >
                  </v-text-field>
               </v-flex>
               <v-flex xs6>
                  <v-select
                     v-model="newEvent.month_id"
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
            <v-btn color="green" @click="createEventName">
               Submit
            </v-btn>
         </template>
      </ka-form>
   </v-flex>
</template>

<script>
	import KAForm from '../../../Base/KA-Form.vue'
	export default {
		data() {
			return {
			   newEvent: {
			   	event_name: '',
			   	Event_Organization_id: '',
               race_website: '',
			   	Event_Type_id: '',
			   	NYAL_Season_id: '',
               club_race: true,
               school_race: false,
               current_year_date: new Date().getFullYear(),
               month_id: 5,
				},
			   months: [
				 {text: "January", value: 1},
				 {text: "February", value: 2},
				 {text: "March", value: 3},
				 {text: "April", value: 4},
				 {text: "May", value: 5},
				 {text: "June", value: 6},
				 {text: "July", value: 7},
				 {text: "August", value: 8},
				 {text: "September", value: 9},
				 {text: "October", value: 10},
				 {text: "November", value: 11},
				 {text: "December", value: 12}
			 ],
            eventTypes: [
                { text: 'NOT ASSIGNED', value: 1 },
                { text: 'Cross Country Meet', value: 2 },
                { text: 'Track Meet', value: 3 },
                { text: 'Road Race', value: 4 },
                { text: 'Trail Run', value: 5 },
                { text: 'Fun Run', value: 6 },
                { text: 'Ultra', value: 7 },
            ],
            seasons: [
                { text: 'Spring', value: 1 },
                { text: 'Summer', value: 2 },
                { text: 'Fall', value: 3 },
            ]
			}
		},
		methods: {
			createEventName() {
				this.$store.dispatch('createEventName', this.newEvent)
			},
		},
		components: {
			'ka-form': KAForm
		}
	}
</script>