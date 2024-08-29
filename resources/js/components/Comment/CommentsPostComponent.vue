<template>
  <div class="col-md-12 mx-auto" style="background-color: rgba(255, 242, 242, 0.1)">

    <div class="text-center fs-6 border border-1">Комментарии</div>
    <div class="my-1 border border-1" v-for="post in posts">
        <!-- <router-link :to='"/posts/"+post.id' style="text-decoration-line: none; color: black;"> 
        <div class="text-center fs-6">{{ post.title.substr(0,21)+'..' }}</div>
    </router-link> -->

    <router-link :to='"/posts/"+post.id' style="text-decoration-line: none; color: black;"> 
    <ItemCommentComponent v-model:message=post.id></ItemCommentComponent>     
</router-link>
    </div>
    </div> 
</template>

<script>
import ItemCommentComponent from './ItemCommentComponent.vue';
    export default {
        name: 'CommentsPostComponent',
        data() {
            return {
                posts: null
             }
        },
        mounted(){
            this.getPosts();
        },
        methods: {
            getPosts(){
                axios.get('/api/posts')
                .then( res => {
                    this.posts = res.data;
                    res.data.forEach((item) => console.log(item));
                })
                .catch( error => {
                    console.log(error)
                })
                .finally({
                })
            }
        },
  components: {
    ItemCommentComponent
    }
    }
</script>
