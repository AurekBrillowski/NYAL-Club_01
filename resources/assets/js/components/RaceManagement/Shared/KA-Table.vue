<template>
   <!--<v-flex xs12 sm5 md7>-->
      <table>
         <thead>
            <tr>
               <th v-for="header in headers">
                  {{ header }}
               </th>
            </tr>
         </thead>
         <tbody>
            <slot v-for="row in rows" :row="row"></slot>
         </tbody>
      </table>
   <!--</v-flex>-->
</template>

<script>
	export default {
		props: ['rows', 'headers']
   }
</script>

<style>

</style>