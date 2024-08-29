<template>
<NavbarComponent />

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
