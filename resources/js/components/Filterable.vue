<template>
    <div class="filterable mt-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <span class="pt-2 pr-2">Terms match</span>

                    <select v-model="query.filter_match" class="form-control col-3">
                        <option value="and">All</option>
                        <option value="or">Any</option>
                    </select>

                    <span class="pt-2 pl-2">of the following: </span>
                </div>
            </div>
            <div class="card-body">
                Filterable
            </div>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue';
    import axios from 'axios';

    export default {
        name: "Filterable",
        props: {
            url: String
        },
        data() {
            return {
                loading: true,
                query: {
                    order_column: 'country',
                    order_direction: 'asc',
                    filter_match: 'and',
                    limit: 10,
                    page: 1
                },
                collection: {
                    data: []
                }
            }
        },
        mounted() {
            this.fetch()
        },
        methods: {
            fetch() {
                axios.get(this.url)
                    .then((res) => {
                        Vue.set(this.$data, 'collection', res.data.collection)
                        this.query.page = res.data.collection.current_page
                    })
                    .catch((error) => {
                        console.log(error);
                    })
                    .finally(() => {
                        this.loading = false
                    })
            }
        }
    }
</script>

<style scoped>

</style>