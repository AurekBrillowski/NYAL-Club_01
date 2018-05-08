<template>
   <v-dialog v-model="dialog" persistent max-width="290">
      <v-btn color="red" slot="activator">Delete</v-btn>
      <v-card>
         <v-card-title>
            Are you sure you want to delete this Event Organization?
         </v-card-title>
         <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="green" @click.native="deleteEventName">Yes</v-btn>
            <v-btn color="red" @click.native="dialog = false">No</v-btn>
         </v-card-actions>
      </v-card>
   </v-dialog>
</template>

<script>
	export default {
		data() {
			return {
				dialog: false
			}
		},
//		computed: {
//			deleteDialog() {
//				return this.$store.state.eventNames.crudActions.deleteDialog;
//			},
//		},
		methods: {
		  deleteEventName() {
				this.$store.dispatch('deleteEventName', this.$store.state.eventNames.selectedRow.id);
				this.dialog = false;
			}
		}
	}
</script>

<style>

</style>