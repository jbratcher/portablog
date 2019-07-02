<template>

    <section id="posts">

        <section class="post-container" v-for="post in posts">

            <p class="post-title">{{ post.title }}</p>

            <router-link :to="{ name: 'update', params: { postId : post.id } }">
                <button type="button" class="btn btn-light">
                    Update
                </button>
            </router-link>
            <a href="#">
                <button type="button" @click="deletePost(post.id)" class="btn btn-danger">
                    Delete
                </button>
            </a>

        </section>

        <div>
            <button
                    v-if="next"
                    type="button"
                    @click="navigate(next)"
                    class="m-3 btn btn-primary"
            >
                Next
            </button>
            <button
                    v-if="prev"
                    type="button"
                    @click="navigate(prev)"
                    class="m-3 btn btn-primary"
            >
                Previous
            </button>
        </div>

    </section>

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
            deletePost(id) {
                axios.delete("/api/posts/" + id).then(response => this.getPosts())
            },
            navigate(address) {
                this.getPosts(address)
            }
        }
    };
</script>