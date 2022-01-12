/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import VueRouter from 'vue-router';
import router from './router/index';
import Vuex from 'vuex';
import storeData from './store/index';

Vue.use(ElementUI);
Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(
    storeData
)

// Vue.component('dashboard', require('./components/Dashboard.vue').default);

const app = new Vue({
    router,
    store,
    el: '#app',
});
