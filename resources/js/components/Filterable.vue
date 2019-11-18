<template>
    <div class="filterable mt-3">
        <div class="card mb-2">
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

                <div v-for="(f, i) in filterCandidates">
                    <div class="form-group">
                        <select class="form-control" @input="selectColumn(f, i, $event)">
                            <option value="">Select a filter</option>
                            <optgroup v-for="group in filterGroups" :label="group.name">
                                <option v-for="x in group.filters"
                                    :value="JSON.stringify(x)"
                                    :selected="f.column && x.name === f.column.name"
                                >
                                    {{x.title}}
                                </option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card-body">
                <table class="table">
                    <slot name="thead"></slot>
                    <tbody>
                    <slot v-if="collection.data && collection.data.length"
                          v-for="item in collection.data"
                          :item="item"
                    ></slot>
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <div>
                        <select v-model="query.limit" :disabled="loading" @change="updateLimit">
                            <option>10</option>
                            <option>20</option>
                            <option>40</option>
                            <option>80</option>
                        </select>
                        <small>Showing {{collection.from}} - {{collection.to}} of {{collection.total}} entries.</small>
                    </div>

                    <div>
                        <button class="btn btn-sm btn-primary" :disabled="!collection.prev_page_url || loading" @click="prevPage">
                            &laquo; Previous
                        </button>

                        <button class="btn btn-sm btn-primary" :disabled="!collection.next_page_url || loading" @click="nextPage">
                            Next &raquo;
                        </button>
                    </div>
                </div>
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
            url: String,
            filterGroups: Array
        },
        data() {
            return {
                loading: true,
                appliedFilters: [],
                filterCandidates: [],
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
            this.addFilter()
        },
        methods: {
            addFilter() {
                this.filterCandidates.push({
                    column: '',
                    operator: '',
                    query_1: null,
                    query_2: null
                })
            },
            applyChange() {
                this.fetch()
            },
            updateLimit() {
                this.query.page = 1
                this.applyChange()
            },
            prevPage() {
                if(this.collection.prev_page_url) {
                    this.query.page = Number(this.query.page) - 1
                    this.applyChange()
                }
            },
            nextPage() {
                if(this.collection.next_page_url) {
                    this.query.page = Number(this.query.page) + 1
                    this.applyChange()
                }
            },
            fetch() {
                const params = {
                    ...this.query
                }
                axios.get(this.url, {params: params})
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