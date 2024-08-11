<template>
    <div class="row">
        <!-- <div style="background-color: violet">{{ posts }}</div> -->
    <div class="col-md-12 mx-auto border border-1 overflow-hidden" v-for="item in posts" style="background-color: white; height: 250px">

        <div class="m-1 border border-1">
                <router-link :to='"/posts/"+item.id' style="text-decoration-line: none; color: black;"> 
            <div class="text-center fs-6">{{ item.title.substr(0,99)+'..' }}</div>
        </router-link>

  <div class="border border-1" style="background-color: rgba(255, 242, 242, 0.2)">
            <div class="text-center fs-6 fst-italic">{{ item.description.substr(0,590)+'.. ' }}</div>

</div>
<div class="border border-1" style="background-color: rosybrown">
            <div class="text-center fs-6 fst-italic">{{ item.id }}</div>

</div>
    </div>
   </div> 
</div>
</template>

<script>
    export default {
        name: 'PostsComponent',
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
                    console.log(res.data);
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
