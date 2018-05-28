<template>
   <v-dialog :value="dialog" max-width="290">
      <v-card>
         <v-card-title>
            <slot></slot>
         </v-card-title>
         <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="green" @click.native="submitAction">Yes</v-btn>
            <v-btn color="red" @click.native="$emit('close')">No</v-btn>
         </v-card-actions>
      </v-card>
   </v-dialog>
</template>

<script>
	export default {
		props: {
			dialog: {
				type: Boolean,
            required: true
         },
         submitAction: {
				type: Function,
            required: true
         },
      }
	}
</script>

<style>

</style>