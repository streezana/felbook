import './bootstrap';
import {createApp} from 'vue';
import AppComponent from './components/AppComponent.vue';
import Router from './router/router.js';

createApp(AppComponent)
.use(Router)
.mount('#app');