<template>

    <div>
        <nav>
            <section>
                <a href="/projects">Projects</a>
                <a href="/">Home</a>
                <hr>
            </section>
        </nav>
        <article>
            <header>
                <header>Project Title</header>
                <p>A detailed description of the project.</p>
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

        },
        data() {
            return {};
        },
        methods: {

        }
    };
</script>