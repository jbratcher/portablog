<template>

    <div class="container">

        <div class="row align-items-center">
            <div class="col-md-8 mx-auto text-center">
                Full stack web developer based in Louisville, KY, USA
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-8 mx-auto text-center">
                <a href="/projects">
                    <button type="button" class="btn btn-outline-dark">
                        Projects
                    </button>
                </a>
                <a href="#top">
                    <button type="button" class="btn btn-outline-dark">
                        Contact
                    </button>
                </a>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="my-4 text-center">Welcome to the Blog </h1>


                <div class="card mb-4" v-for="post in posts">
                    <img class="card-img-top" :src=" post.image ? ('/uploads/posts/' + post.image) : 'http://placehold.it/750x300' " :alt=" post.title ">
                    <div class="card-body">
                        <h2 class="card-title text-center">{{ post.title }}</h2>
                        <p class="card-text"> {{ post.body.substring(0, 100) }} </p>
                        <a :href="`/posts/${post.id}`" class="btn btn-primary" role="button"
                        >Full post <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted {{ post.name }} by
                        <a href="#">{{ post.username}} </a>
                    </div>
                </div>


            </div>
        </div>

    </div>

</template>

<script>
    export default {
        mounted() {
            this.getPosts();
        },
        data() {
            return {
                posts: {},
                next: null,
                prev: null
            };
        },
        methods: {
            getPosts(address) {
                axios.get(address ? address : "/api/posts").then(response => {
                    this.posts = response.data.data;
                    this.prev = response.data.links.prev;
                    this.next = response.data.links.next;
                });
            },
            navigate(address) {
                this.getPosts(address)
            }
        }
    };
</script>