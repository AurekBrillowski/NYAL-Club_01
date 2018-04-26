<template>
   <v-app dark>
      <v-navigation-drawer
      persistent
      :clipped="clipped"
      v-model="drawer"
      enable-resize-watcher
      fixed
      app
      >
         <v-list>
            <v-list-tile
            value="true"
            v-for="(item, i) in items"
            :key="i"
            >
               <v-list-tile-action>
                  <v-icon v-html="item.icon"></v-icon>
               </v-list-tile-action>
               <v-list-tile-content>
                  <v-list-tile-title v-text="item.title"></v-list-tile-title>
               </v-list-tile-content>
            </v-list-tile>
         </v-list>
      </v-navigation-drawer>
      <v-toolbar
      app
      :clipped-left="clipped"
      >
         <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
         <v-toolbar-title v-text="title"></v-toolbar-title>
      </v-toolbar>
      <v-content>
         <v-slide-y-transition mode="out-in">
            <router-view></router-view>
         </v-slide-y-transition>
      </v-content>
      <v-footer :fixed="fixed" app>
         <span>&copy; 2017</span>
      </v-footer>
   </v-app>
</template>

<script>
	export default {
		name: 'ka-home',
		data () {
			return {
				clipped: false,
				drawer: false,
				fixed: false,
				items: [{
					icon: 'home',
					title: 'KA - Home'
				}],
				title: 'National Youth Athletics League Events'
			}
		},
	}
</script>
