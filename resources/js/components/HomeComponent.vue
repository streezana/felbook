<template>
   <div class="row justify-content-center">
  
      <div class="col-md-2">
           <div class="card">
              <div class="card-header">
                 <!-- <CommentsPostComponent /> -->
                 <div class="col-md-12 mx-auto" style="background-color: rgba(255, 242, 242, 0.1)">
                  <p>  Vрeпzарer Mdрвqco Veгооt</p> 
                  <p>  Gaрпварik Xрвар Sdaрhоg</p> 
                  <p>  Mdfegref Neвnol Prowlotreg</p> 
                 </div> 
  
              </div>   
           </div>    
      </div>
  
        <div class="col-md-8">
           <div class="card">
           <div class="card-header">
              <PostsComponent />
              <!-- <div class="col-md-12 mx-auto" style="background-color: navajowhite">
                 Sрпварвр Wарвар Vргооо
                 </div>  -->
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
  //import CommentsPostComponent from './Comment/CommentsPostComponent.vue';
    export default {
    name: "HomeComponent",
    components: {
     DashboardComponent,
     PostsComponent
     // CommentsPostComponent
      },
    }
   </script>