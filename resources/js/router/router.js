// import Vue from 'vue';
// import VueRouter from 'vue-router';
// Vue.use(VueRouter);
import { createRouter, createWebHistory } from "vue-router";
import routes from './routes.js';

const router = createRouter({
  history: createWebHistory(),
  routes
})
export default router;
