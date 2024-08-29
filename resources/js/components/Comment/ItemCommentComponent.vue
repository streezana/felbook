<template>
  <div class="mx-auto border border-1" v-if="comments">

            <div v-for="item in comments" style="background-color: white">
<!-- 
            <div class="text-center fs-6 fst-italic" style="background-color:whitesmoke">{{ item.content.substr(0,39)+'..' }}</div>   -->
            <div class="fontcomment" style="background-color: rgba(255, 199, 199, 0.4)">{{ item.content.substr(0,39)+'..' }}</div>                                                                    

        </div>

 </div>
</template>
 
 <script>
  export default {
     name: "ItemCommentComponent",
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

<style lang="less">
  .fontcomment {
    border: 0.6px solid rgba(167, 167, 167, 0.7);
    font-size: 16px;
    font-style: italic;
    justify-content: space-between;
    text-align: justify;
    width: 100%;
    padding: 2px;
    line-height: 1.2;
  }
.fontcomment:hover {
    color: #ff6a06;
}
</style>