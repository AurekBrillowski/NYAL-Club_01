<template>
   <v-dialog v-model="dialog" persistent max-width="290">
      <v-btn color="red" slot="activator" :disabled="deleteDialog">Delete</v-btn>
      <v-card>
         <v-card-title>
            Are you sure you want to delete this Event Organization?
         </v-card-title>
         <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="green" @click.native="deleteOrganization">Yes</v-btn>
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
		computed: {
			deleteDialog() {
				return this.$store.state.eventOrganizations.deleteDialog;
			},
		},
		methods: {
			deleteOrganization() {
				this.$store.dispatch('deleteOrganization', this.$store.state.eventOrganizations.selected.id);
				this.dialog = false;
			}
		}
	}
</script>

<style>

</style>