<template>
   <v-text-field
   append-icon="search"
   label="Search"
   single-line
   hide-details
   :value="value"
   @input="$emit('input', $event.target.value)"
   >
   </v-text-field>
</template>

<script>
	export default {
		props: ['value']
   }
</script>