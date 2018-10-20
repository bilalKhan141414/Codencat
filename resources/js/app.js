
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//home page
Vue.component('main-header', require('./components/layouts/menu.vue'));
Vue.component('cover', require('./components/layouts/home/HomeCover.vue'));
Vue.component('graphic-designing', require('./components/layouts/home/GraphicDesigning.vue'));
Vue.component('development', require('./components/layouts/home/Development.vue'));
Vue.component('clients', require('./components/layouts/home/Clients.vue'));
Vue.component('main-footer', require('./components/layouts/Footer.vue'));

//graphicdesign page
Vue.component('graphic-design-cover', require('./components/layouts/Graphics/GraphicDesignCover.vue'));

const app = new Vue({
    el: '#app'
});
