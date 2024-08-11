<template>
    <!-- <div class="container"> -->
          <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header fs-4 text-center">АВТОРИЗАЦИЯ</div>

                 <div class="col-md-8 mx-auto">
                        <input type="email" class="form-control mt-3 mb-3 text-center" placeholder="email" style="color: black">
                        <input type="password" class="form-control mb-3 text-center" placeholder="password">
                        <!-- <input type="submit" class="but" style="width: 100%"> -->
                        <input type="submit" class="btn btn-block border border-1" style="color: black; background-color: lightgoldenrodyellow; width: 100%">
                    <!-- </div> -->
                    <div class="d-flex justify-content-between">
                     <div class="form-control mt-3 mb-3 text-center">Нет аккаунта?</div>
                     <div class="form-control mt-3 mb-3 text-center" style="background-color: gainsboro">
                     <router-link :to="{name: 'registr'}" style="text-decoration-line: none; color: black"> 
                        ЗАРЕГИСТРИРОВАТЬСЯ
                    </router-link></div>
                </div>
                </div>
     </div>    
     </div>
 </div>    
 <!-- </div>  -->
 </template>
 
 <script>
     export default {
        name: "Login",
  }
 </script>