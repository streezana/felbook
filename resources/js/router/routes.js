import HomeComponent from '../components/HomeComponent.vue';
//import CreateComponent from '../components/Post/CreateComponent.vue';
import OnePostComponent from '../components/Post/OnePostComponent.vue';
import Login  from '../components/User/Login.vue';
import Registr from '../components/User/Registr.vue';

const routes = [
          { path: '/home', 
            name: 'home',
            alias: '/', 
            component: HomeComponent },
          { path: '/login',
            name: 'login',
            component: Login },
          { path: '/registr',
            name: 'registr',
            component: Registr },
           { path: '/posts/:id',
            component: OnePostComponent },
            // { path: '/create',
            //   name: 'create',
            //   component: CreateComponent }
        ]

export default routes;