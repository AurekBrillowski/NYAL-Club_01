let mix = require('laravel-mix');

mix
	.js('resources/assets/js/app.js', 'public/js')
   .styles([
   	    'node_modules/vuetify/dist/vuetify.min.css',
   	    'resources/assets/css/app.css'
   ], 'public/css/app.css');

// mix.options({
// 	extractVueStyles: 'public/css/vue-style.css'
// });

mix.webpackConfig({
	resolve: {
		alias: {
			'vue$': 'vue/dist/vue.runtime.esm.js'
		}
	}
});
