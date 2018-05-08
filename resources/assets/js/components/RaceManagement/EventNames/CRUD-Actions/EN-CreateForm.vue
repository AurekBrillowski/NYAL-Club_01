<template>
   <v-flex xs12 sm5 md4>
      <ka-form>
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
                  <v-checkbox label="Club Race" v-model="newEvent.club_race" true-value="1" false-value="0" hide-details></v-checkbox>
                  <v-checkbox label="School Race" v-model="newEvent.school_race" true-value="1" false-value="0" hide-details></v-checkbox>
               </v-flex>
            </v-layout>
            <v-layout row wrap>
               <v-flex xs6>
                  <v-text-field
                  label="Current Year"
                  v-model="newEvent.current_year_date"
                  mask="####-##-##"
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
            <v-btn color="red" @click="cancelEventNameCreation">
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
               current_year_date: '',
               month_id: 5,
				},
			}
		},
		methods: {
			createEventName() {
				this.$store.dispatch('createEventName', this.newEvent)
			},
          cancelEventNameCreation() {
				this.$store.commit('cancelEventNameCreation')
          },
		},
      computed: {
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
		components: {
			'ka-form': KAForm
		}
	}
</script>