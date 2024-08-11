<template>
          <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header fs-4 text-center">РЕГИСТРАЦИЯ</div>

                 <div class="col-md-8 mx-auto">
                    <input v-model="name" type="text" class="form-control mt-3 mb-3 text-center" placeholder="name" style="color: black">
                    <input v-model="email" type="email" class="form-control mt-3 mb-3 text-center" placeholder="email" style="color: black">
                        <input v-model="password" type="password" class="form-control mb-3 text-center" placeholder="password">
                        <input v-model="password_confirmation" type="password" class="form-control mb-3 text-center" placeholder="confirm password">
                       
                        <input @click.prevent="store" type="submit" class="btn btn-block border border-1" style="color: black; background-color: lightgoldenrodyellow; width: 100%">

                    <div class="d-flex justify-content-between">
                     <div class="form-control mt-3 mb-3 text-center">Уже есть аккаунт?</div>
                     <div class="form-control mt-3 mb-3 text-center" style="background-color: gainsboro">
                     <router-link :to="{name: 'login'}" style="text-decoration-line: none; color: black"> 
                        ВОЙТИ
                    </router-link></div>
                </div>
                </div>
     </div>    
     </div>
 </div>  
<!-- <div class="center-form">
    <input v-model="name" type="text" class="form-input" placeholder="name">
   <input v-model="email" type="email" class="form-input" placeholder="email">
   <input v-model="password" type="password" class="form-input" placeholder="password">
   <input v-model="password_confirmation" type="password" class="form-input" placeholder="confirm password"> -->
   <!-- <input @click.prevent="store" type="submit" class="but"> -->
<!-- </div> -->
 </template>
 
 <script>
     export default {
        name: "Registr",
        data() {
            return {
                name: null,
                email: null,
                password: null,
                password_confirmation: null,
             }
        },
        methods: {
           store(){
                axios.post('/api/users', {name:this.name, email:this.email, password:this.password, password_confirmation:this.password_confirmation})
                .then(res => {
                    this.name = null
                    this.email = null
                    this.password = null
                    this.password_confirmation = null
                    console.log(res)
                }); 
            }
        }
  }
 </script>