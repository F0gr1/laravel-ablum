/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import HeaderComponent from "./components/HeaderComponent";
import VueRouter from 'vue-router';
import CardImageComponent from  "./components/CardImageComponent";
import CreateCardImageComponent from  "./components/CreateCardImageComponent";

import CardAlbumComponent from  "./components/Album/CardAlbumComponent";
import CreateCardAlbumComponent from  "./components/Album/CreateCardAlbumComponent";
window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);

Vue.use(VueRouter);
 
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/images',
            name: 'image.list',
            component: CardImageComponent,
            props: true
        },
        {
            path: '/images/create',
            name: 'image.create',
            component: CreateCardImageComponent,
            props: true
        },
        {
            path: '/albums',
            name: 'albums.list',
            component: CardAlbumComponent,
            props: true
        },
        {
            path: '/albums/create',
            name: 'albums.create',
            component: CreateCardAlbumComponent,
            props: true
        },
    ]
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
