<template>
   <v-app dark>
      <v-navigation-drawer
         persistent
         :clipped="clipped"
         v-model="drawer"
         fixed
         app
      >
         <v-list dense>
            <v-list-tile>
               <v-list-tile-content>
                  <v-list-tile-title class="title">Admin Name</v-list-tile-title>
               </v-list-tile-content>
            </v-list-tile>
         </v-list>
         <v-divider></v-divider>
         <v-list dense>
            <template v-for="item in items">
               <v-list-tile :href="item.href" :to="item.href">
                  <v-list-tile-action>
                     <v-icon>{{ item.icon }}</v-icon>
                  </v-list-tile-action>
                  <v-list-tile-content>
                     {{ item.title }}
                  </v-list-tile-content>
               </v-list-tile>
            </template>
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
				items: [
//				   {title: 'Home', href: '/', icon: 'home', router: true},
				   {title: 'Race Management', href: '/', icon: 'directions_run', router: true},
            ],
				title: 'National Youth Athletics League - Admin'
			}
		},
	}
</script>
