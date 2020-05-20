require('./bootstrap');
import Vue from 'vue';
import Example from './components/Example.vue';
Window.Vue = require('vue');

Vue.component('menu-list', Example);
const app = new Vue({
    el: '#app'
});
