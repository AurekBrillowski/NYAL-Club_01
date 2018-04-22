<template>
   <v-flex xs1>
      <v-btn color="green" @click.prevent="triggerCreateAction">New</v-btn>
   </v-flex>
</template>

<script>
	export default {
		data() {
			return {}
		},
		methods: {
			triggerCreateAction() {
				this.$store.commit('triggerCreateAction')
			},
		}
	}
</script>

<style>

</style>