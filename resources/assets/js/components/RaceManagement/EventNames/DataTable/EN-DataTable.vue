<template>
   <v-flex xs12 sm5 md7>
      <table class="event-name-table">
         <thead>
            <tr>
               <th class="event-name-header_1">Event Name</th>
               <th class="event-name-header_2">Season</th>
               <th class="event-name-header_3">Event Type</th>
               <th class="event-name-header_4">Website</th>
            </tr>
         </thead>
         <tbody>
            <tr
            v-for="eventName in filteredEventNames"
            :key="eventName.id"
            :class="{ selected: eventName === selectedRow }"
            @click="selectEventNameRow(eventName)"
            >
               <td>{{ eventName.event_name }}</td>
               <td>{{ eventName.NYAL_Season_id | ShowSeasons }}</td>
               <td>{{ eventName.Event_Type_id | ShowEventTypes }}</td>
               <td>{{ eventName.race_website }}</td>
            </tr>
         </tbody>
      </table>
   </v-flex>
</template>

<script>
   import ShowSeasons from '../../../../filters/ShowSeasons';
   import ShowEventTypes from '../../../../filters/ShowEventTypes';
	export default {
		computed: {
			selectedRow() {
				return this.$store.state.eventNames.selectedRow;
			},
//         filteredEventNames() {
//				return this.$store.getters.filteredEventNames;
//         },
         filteredEventNames() {
				let selectedOrganization = this.$store.state.eventOrganizations.selected;
				return this.$store.getters.eventNames.filter(name => {
					return name.Event_Organization_id === selectedOrganization.id;
            });
         },
		},
       methods: {
			selectEventNameRow(row) {
				this.$store.commit('selectEventNameRow', row)
         },
       },
       filters: { ShowSeasons, ShowEventTypes },
	}
</script>

<style scoped>
   .event-name-table {
      width: 95%;
   }
   .event-name-header_1 {
      width: 250px;
   }
   .event-name-header_2 {
      width: 90px;
   }
   .event-name-header_3 {
      width: 140px;
   }
   .event-name-header_4 {
      width: 150px;
   }
</style>