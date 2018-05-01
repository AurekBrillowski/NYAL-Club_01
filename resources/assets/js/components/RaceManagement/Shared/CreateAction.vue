<template>
   <v-btn color="green" @click="triggerCreate">New</v-btn>
</template>

<script>
	export default {
		props: {
			triggerCreate: {
				type: Function,
            required: true
         }
      },
   }
</script>

<style>

</style>