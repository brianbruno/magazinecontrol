
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
window.Formatter = require('formatter');
window.$ = window.jQuery = require('jquery')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('cards-venda', require('./components/CardsVenda.vue'));
Vue.component('card-dashboard', require('./components/CardDashboardLink.vue'));
Vue.component('cadastrar-produto', require('./components/CadastrarProduto.vue'));
Vue.component('dashboard-cards', require('./components/DashboardCards.vue'));

const app = new Vue({
    el: '#app'
});

const dashboardCards = new Vue({
    el: '#app'
});

const cardsVenda = new Vue({
    el: '#app'
});

const cardDarshboardLink = new Vue({
    el: '#app'
});

const cadastrarProduto = new Vue({
    el: '#app'
});
