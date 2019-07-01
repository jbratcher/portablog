<template>

    <div>
        <nav>
            <section>
                <a href="/admin/dashboard">Dashboard</a> &nbsp; ||  &nbsp;
                <a href="/">Home</a>
                <hr>
                <ul>
                    <li>
                        <router-link :to="{ name: 'create', params: { userId } }">
                            Add a post
                        </router-link>
                    </li>
                </ul>
            </section>
        </nav>
        <article>
            <header>
                <header class="d-inline">Howdy, {{ userName }}</header>
                <p @click="logout" class="float-right mr-3">Logout</p>
            </header>
            <div>
                <router-view></router-view>
            </div>
        </article>
    </div>

</template>

<script>
    export default {
        props: {
            userId: {
                type: Number,
                required: true
            },
            userName: {
                type: String,
                required: true
            }
        },
        data() {
            return {};
        },
        methods: {
            logout() {
                axios.post("/logout").then(() => {
                    window.location = "/";
                });
            }
        }
    };
</script>