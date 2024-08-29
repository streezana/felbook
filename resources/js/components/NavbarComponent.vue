<template>
  <div class="flex-container">
    <div class="space">
    <router-link :to="{name: 'home'}" style="text-decoration-line: none; color: black;">
      <p>Тестовые задания</p>
    </router-link>
  </div>
  <div class="space">
      <router-link :to="{name: 'home'}" style="text-decoration-line: none; color: black;">
     <p>Задачи по программированию</p> 
    </router-link>
  </div>
    <div class="space">
  <router-link :to="{name: 'login'}"  style="text-decoration-line: none; color: black">
    <p>Войти</p>
  </router-link>
</div>
  </div>  
  </template>

<script>
    export default {
        name: "NavbarComponent",
    }
</script>

<style lang="less" scoped>
.flex-container {
  display: flex; 
  align-items: space-between;
  justify-content: center;
  background-color: rgba(255, 242, 242, 0.1);
 height: 40px;
}
.space {
 margin: 0 auto; 
 align-items: space-between;
}
p {
 font-size: 20px;
}
p:hover {
    color: #ff6a06; 
}
</style>