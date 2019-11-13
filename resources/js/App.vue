<template>
    <div id="root">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
        </nav>
        <div class="container">
            <filterable v-bind="filterable"></filterable>
        </div>
    </div>
</template>

<script>
    import Filterable from './components/Filterable.vue';
    export default {
        name: "App",
        components: {
            Filterable
        },
        data() {
            return {
                filterable: {
                    url:'/api/terms'
                }
            }
        }
    }
</script>

<style scoped>

</style>