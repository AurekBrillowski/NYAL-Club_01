<template>
   <v-dialog v-model="dialog" persistent max-width="290">
      <v-card>
         <v-card-title>
            <slot></slot>
         </v-card-title>
         <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="green" @click.native="$emit('close')">Yes</v-btn>
            <v-btn color="red" @click.native="$emit('close')">No</v-btn>
         </v-card-actions>
      </v-card>
   </v-dialog>
</template>

<script>
	export default {
		props: {
//			submitFn: {
//				type: Function,
//            required: true
//         },
//			cancelFn: {
//				type: Function,
//            required: true
//         },
//		  openFn: {
//			  type: Function,
//			  required: true
//		  },
         dialog: {
				type: Boolean,
            required: true
         }
      },
		data() {
			return {
//				dialog: false
			}
		},
//		computed: {
//			deleteDialog() {
//				return this.$store.state.eventOrganizations.deleteDialog;
//			},
//		},
//		methods: {
//			deleteOrganization() {
//				this.$store.dispatch('deleteOrganization', this.$store.state.eventOrganizations.selected.id)
//				this.dialog = false
//			}
//		}
	}
</script>

<style>

</style>