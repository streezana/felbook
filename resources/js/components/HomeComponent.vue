<template>
   <div class="row justify-content-center">
  
      <div class="col-md-2">
           <div class="card">
              <div class="card-header">

                 <CommentsPostComponent /> 
              </div>   
           </div>    
      </div>
      <!-- <div class="order-1"> -->
        <div class="col-md-8">
           <div class="card">
           <div class="card-header">
              <PostsComponent />
        </div>   
       </div>    
    </div>
  
    <div class="col-md-2">
        <div class="card">
           <div class="card-header"> 
              <DashboardComponent />
           </div>   
        </div>    
    </div>
  
   </div>    
</template>
   
 <script>
import DashboardComponent from './DashboardComponent.vue';
import PostsComponent from './Post/PostsComponent.vue';
  //import PostsComponent from './Post/PostsComponent.vue';
import CommentsPostComponent from './Comment/CommentsPostComponent.vue';
    export default {
    name: "HomeComponent",
    components: {
     DashboardComponent,
     PostsComponent,
 CommentsPostComponent
      },
    }
   </script>