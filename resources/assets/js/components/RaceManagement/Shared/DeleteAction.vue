<template>
   <!--<v-flex xs1>-->
      <v-dialog v-model="dialog" persistent max-width="290">
         <v-btn color="red" slot="activator">Delete</v-btn>
         <v-card>
            <v-card-title>
               <slot></slot>
            </v-card-title>
            <v-card-actions>
               <v-spacer></v-spacer>
               <v-btn color="green" @click.prevent="dialog = false">Yes</v-btn>
               <v-btn color="red" @click.native="dialog = false">No</v-btn>
            </v-card-actions>
         </v-card>
      </v-dialog>
   <!--</v-flex>-->
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
//         dialog: {
//				type: Boolean,
//            required: true
//         }
      },
       data() {
			return {
			 dialog: false
		 }
       },
//      methods: {}
   }
</script>

<style>

</style>