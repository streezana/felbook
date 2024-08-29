<template>

  <div class="mx-auto border border-1" v-if="comments">
    <div class="px-3 fs-6 fst-italic" style="background-color:lightslategray">Комментарии</div>

            <!-- <div class="text-center" style="background-color:whitesmoke">{{ comments }}</div>  -->
            <div  class="border border-1" v-for="item in comments" style="background-color: white">
              <div class="p-2 border border-1">
              <div class="fs-6" style="background-color:lavender">
                <span class="p-2"> Автор </span>
                  <span>{{ item.user_name }}</span>
              </div>  
            <div class="p-2 text-center fs-6 fst-italic" style="background-color:whitesmoke">{{ item.content }}</div>                                   
          </div>
          
        </div>

 </div>
</template>
 
 <script>
  export default {
     name: "PostCommentComponent",
     props: ['message'],
  data() {
            return {
              comments : null
             }
        },
     mounted(){
        this.getComments(this.message);
        },
        methods: {
       getComments(key){
            axios.get(`/api/posts/comments/${key}`) 
               .then( res => {
                    this.comments = res.data;
                    console.log('comments = '+res.data);
                })
                .catch( error => {
                    console.log(error)
                })
                .finally({
                })
            }
        }
  }
 </script>

