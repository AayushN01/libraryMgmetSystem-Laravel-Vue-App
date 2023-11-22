/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('category-table-component',require('./components/BookCategory/CategoryTableComponent.vue').default);
Vue.component('add-category-component',require('./components/BookCategory/AddCategoryComponent.vue').default);

const app = new Vue({
    el: '#layout-wrapper',
});
