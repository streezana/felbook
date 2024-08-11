<template>
  <div class="header">
     <div class="d-flex justify-content-between" style="background-color: rgba(255, 242, 242, 0.1); height: 40px">
     
<div class="ml-3 d-xl-none border border-1 px-4">
  <router-link :to="{name: 'home'}" style="text-decoration-line: none; color: black;">
                  <p class="fs-5 px-3">Задачи по программированию | Тестовые задания</p>
        </router-link>
    </div> 

  <div class="mr-3 d-xl-none px-4"> 
        <router-link :to="{name: 'login'}"  style="text-decoration-line: none; color: black">
          <p class="fs-5 px-3">Войти</p>
        </router-link>
      </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "NavbarComponent",
    }
</script>

<style lang="less" scoped>
  .header {
  width: 800px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>