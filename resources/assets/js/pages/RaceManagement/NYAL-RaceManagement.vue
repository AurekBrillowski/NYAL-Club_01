<template>
   <v-container fluid grid-list-xl>
      <nyal-event-organizations></nyal-event-organizations>
      <nyal-event-contacts></nyal-event-contacts>
      <nyal-event-names></nyal-event-names>
      <!--<nyal-event-instances></nyal-event-instances>-->
      <!--<nyal-event-instance-races></nyal-event-instance-races>-->
   </v-container>
</template>

<script>
	import NYAL_Event_Organizations from '../../components/RaceManagement/EventOrganizations/EventOrganization-Index.vue'
	import NYAL_Event_Contacts from '../../components/RaceManagement/EventContacts/EventContacts-Index.vue'
	import NYAL_Event_Names from '../../components/RaceManagement/EventNames/EventNames-Index.vue'
	import NYAL_Event_Instances from '../../components/RaceManagement/EventInstances/EventInstances-Index.vue'
	import NYAL_Event_Instance_Races from '../../components/RaceManagement/EventInstanceRaces/EventInstanceRaces-Index.vue'

	export default {
		components: {
			'nyal-event-organizations': NYAL_Event_Organizations,
			'nyal-event-contacts': NYAL_Event_Contacts,
			'nyal-event-names': NYAL_Event_Names,
			'nyal-event-instances': NYAL_Event_Instances,
			'nyal-event-instance-races': NYAL_Event_Instance_Races,
		},
	}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>
