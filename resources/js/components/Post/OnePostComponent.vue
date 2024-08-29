<template>
 <div class="row justify-content-center">
<div class="col-md-2">
     <div class="card">
        <div class="card-header">
         <CommentsPostComponent />
        </div>   
     </div>    
</div>

<div class="col-md-8">
         <div class="card">
            <div class="mx-auto border border-1" v-if="onepost">
               <div class="px-3" style="background-color: rgba(255, 199, 199, 0.4)">
               <div class="text-center" style="height: 50px" >{{ onepost.title.substr(0,200)+'.' }}</div>
            </div>

               <div class="p-3 border border-1">
                  <div class="fontjustify" v-html="dynamicHTML">

               </div> 
            </div>     
 </div>
  
<div v-if="onepost">
   <PostCommentComponent v-model:message=onepost.id></PostCommentComponent>
</div> 
<!-- <div class="card-header" v-if="onepost">
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
import PostCommentComponent from '../Comment/PostCommentComponent.vue';
import CommentsPostComponent from '../Comment/CommentsPostComponent.vue';
//import CreateCommentComponent from '../Comment/CreateCommentComponent.vue';

export default {
  name: "OnePostComponent",
  data() {
         return {
            onepost: null,
           }
        },
      computed: { 
         dynamicHTML() { 
         return `<p>${this.onepost.description.replace(/\n/g, '</p><p>')}</p>`; 
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
    PostCommentComponent,
    CommentsPostComponent,
   //  CreateCommentComponent
    }
  }
 </script>
<!-- <style lang="less" scoped> -->
<style lang="less">
.text-block {
    white-space: pre-line;
    text-indent: 17px;
    text-align: justify;
}
a {
    color: #0075B2; 
    text-decoration: none; 
   }
a:visited {
    color: #8F8E8E;
   } 
a:hover {
    color: #f14018; 
    text-decoration: underline; 
   }
.fontjustify {
    justify-content: space-between;
    text-align: justify;
    width: 100%;
}
</style>
