<template>
    <div id="root">
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
                    url:'/api/terms',
                    orderables: [
                        {title: 'Country', name: 'country'},
                        {title: 'National term', name: 'national_term'},
                        {title: 'English term', name: 'english_term'},
                        {title: 'National definition', name: 'national_definition'},
                        {title: 'English definition', name: 'english_definition'},
                        {title: 'English document', name: 'english_document'},
                        {title: 'National document', name: 'national_document'},
                        {title: 'Year', name: 'year'},
                        {title: 'National document link', name: 'national_document_link'},
                        {title: 'English document link', name: 'english_document_link'},
                    ],
                    filterGroups: [
                        {
                            name: 'Term',
                            filters: [
                                {title: 'Country', name: 'country', type: 'string'},
                                {title: 'National term', name: 'national_term', type: 'string'},
                                {title: 'English term', name: 'english_term', type: 'string'},
                                {title: 'National definition', name: 'national_definition', type: 'string'},
                                {title: 'English definition', name: 'english_definition', type: 'string'},
                                {title: 'English document', name: 'english_document', type: 'string'},
                                {title: 'National document', name: 'national_document', type: 'string'},
                                {title: 'Year', name: 'year', type: 'numeric'},
                                {title: 'National document link', name: 'national_document_link', type: 'string'},
                                {title: 'English document link', name: 'english_document_link', type: 'string'},
                            ]
                        }
                    ]
                }
            }
        },
    }
</script>

<style scoped>

</style>