/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

//Element-ui library
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import VueRouter from "vue-router";
import router from "./router/index";

Vue.use(ElementUI);
Vue.use(VueRouter);

// Vue.component('dashboard', require('./components/Dashboard.vue').default);

const app = new Vue({
    router,
    el: '#app',
});
