
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

//design page
Vue.component('graphic-design-cover', require('./components/layouts/Graphics/GraphicDesignCover.vue'));
Vue.component('business-card-mockup', require('./components/layouts/Graphics/BusinessCardMockup.vue'));
Vue.component('branding', require('./components/layouts/Graphics/Branding.vue'));
Vue.component('logo', require('./components/layouts/Graphics/Logo.vue'));
Vue.component('name', require('./components/layouts/Graphics/Name.vue'));
Vue.component('digital-design-cover', require('./components/layouts/Graphics/DigitalDesignCover.vue'));
Vue.component('websites', require('./components/layouts/Graphics/Websites.vue'));
Vue.component('design', require('./components/layouts/Graphics/Design.vue'));
Vue.component('e-commerce', require('./components/layouts/Graphics/E-Commerce.vue'));
Vue.component('tools', require('./components/layouts/Graphics/Tools.vue'));
Vue.component('dev-services', require('./components/layouts/Graphics/Services.vue'));

//development page
Vue.component('web-development-cover', require('./components/layouts/Development/WebDevelopmentCover.vue'));
Vue.component('dev-img-cover', require('./components/layouts/Development/DevelopmentImageCover.vue'));
Vue.component('web-design', require('./components/layouts/Development/WebDesign.vue'));
Vue.component('responsive-web', require('./components/layouts/Development/ResponsiveWeb.vue'));
Vue.component('redesign-website', require('./components/layouts/Development/RedesignWebsite.vue'));
Vue.component('database-integration', require('./components/layouts/Development/DatabaseIntegration.vue'));
Vue.component('management-system', require('./components/layouts/Development/ManagementSystem.vue'));
Vue.component('technologies-we-use', require('./components/layouts/Development/TechnologiesWeUse.vue'));
Vue.component('design-services', require('./components/layouts/Development/Services.vue'));

//contact page
Vue.component('contact-cover', require('./components/layouts/contact/ContactCover.vue'));
Vue.component('contact-section', require('./components/layouts/contact/ContactSection.vue'));

//portfolio
Vue.component('portfolio-cover', require('./components/layouts/portfolio/PortfolioCover.vue'));

const app = new Vue({
    el: '#app'
});
