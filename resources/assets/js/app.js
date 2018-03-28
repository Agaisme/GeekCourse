
require('./bootstrap');
window.Vue 		= require('vue');

import fontawesome from '@fortawesome/fontawesome'
import regular from '@fortawesome/fontawesome-free-regular'
import solid from '@fortawesome/fontawesome-free-solid'
import brands from '@fortawesome/fontawesome-free-brands'

fontawesome.library.add(regular)
fontawesome.library.add(solid)
fontawesome.library.add(brands)

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let Myheader 	= require('./components/Myheader.vue');
let Myfooter 	= require('./components/Myfooter.vue');

let Home 		= require('./components/Home.vue');
let About 		= require('./components/About.vue');

const routes = [
  { path: '/home', component: Home },
  { path: '/about', component: About }
]

const router = new VueRouter({
  // mode : 'history',
  routes // short for `routes: routes`
})


const app = new Vue({
    el: '#app',
    router,
    components:{Myheader, Myfooter},
});
