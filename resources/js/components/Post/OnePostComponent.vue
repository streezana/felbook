<template>
 <div class="row justify-content-center">
<div class="col-md-2">
     <div class="card">
        <div class="card-header">
       <!--   <CommentsPostComponent /> -->
        </div>   
     </div>    
</div>

<div class="col-md-8">
         <div class="card">
            <div class="mx-auto border border-1" v-if="onepost">
               <div class="text-center" style="background-color: rgba(255, 242, 242, 0.2); height: 50px" >{{ onepost.title }}</div>
               <div class="text-center" style="background-color:lightgrey;">{{ onepost.description }}</div>

            
 </div>
  
<!-- <div v-if="onepost">
   <PostCommentComponent v-model:message=onepost.id></PostCommentComponent>
</div> 
<div class="card-header" v-if="onepost">
   <CreateCommentComponent v-model:message=onepost.id></CreateCommentComponent>
</div> -->

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
import DashboardComponent from '../DashboardComponent.vue';
//import CreateCommentComponent from '../Comment/CreateCommentComponent.vue';
//import PostCommentComponent from '../Comment/PostCommentComponent.vue';
//import CommentsPostComponent from '../Comment/CommentsPostComponent.vue';

export default {
  name: "OnePostComponent",
  data() {
            return {
                onepost: null,
             }
        },
         mounted(){
        this.getOnePost(this.$route.params.id);
        },
        methods: {
        getOnePost(key){
           axios.get(`/api/posts/${key}`) 
               .then( res => {
                    this.onepost = res.data;
                    console.log('onePost = '+res.data);
                })
                .catch( error => {
                    console.log(error)
                })
                .finally({
                })
            },
        },
  components: {
    DashboardComponent,
   //  CreateCommentComponent,
   //  PostCommentComponent,
   //  CommentsPostComponent,
    }
  }
 </script>

