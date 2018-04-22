<template>
   <v-form>
      <v-card>
         <!--<v-card-title>-->
            <!--<slot name="form_header">-->
               <!--<slot>Form Header Goes Here</slot>-->
            <!--</slot>-->
         <!--</v-card-title>-->
         <v-card-text>
            <slot name="form_inputs">
               Form Inputs Go Here
            </slot>
         </v-card-text>
         <v-divider></v-divider>
         <v-card-actions>
            <slot name="form_actions">
               Form Actions Go Here (Buttons)
            </slot>
         </v-card-actions>
      </v-card>
   </v-form>
</template>

<script>
	export default {
		data() {
			return {}
		}
	}
</script>

<style>

</style>