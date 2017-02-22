require('./bootstrap');

Vue.component('pet', require('./components/Pet.vue'));

const app = new Vue({
    el: '#app'
});