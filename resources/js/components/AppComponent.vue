<template>
     <div class="d-flex justify-content-between" style="background-color: lightgoldenrodyellow;">
<NavbarComponent />
  </div>
  <router-view />
</template>

<script>
import NavbarComponent from './NavbarComponent.vue';
    export default {
        name: "AppComponent",
  components: {
    NavbarComponent
    },
    }
</script>
