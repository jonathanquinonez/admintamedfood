
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

Vue.component('example', require('./components/Example.vue'));
Vue.component('ModalComponent', require('./components/ModalComponent.vue'));
Vue.component('restringir', require('./components/restringir.vue'));
Vue.component('ventas', require('./components/ventas.vue'));
Vue.component('sms', require('./components/sms.vue'));
Vue.component('push', require('./components/push.vue'));
Vue.component('email', require('./components/email.vue'));


const app = new Vue({
    el: '#app'
});


