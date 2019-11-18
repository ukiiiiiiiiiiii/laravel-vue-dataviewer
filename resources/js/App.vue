<template>
    <div id="root">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
        </nav>
        <div class="container">
            <filterable v-bind="filterable">
                <thead slot="thead">
                    <tr>
                        <th>Country</th>
                        <th>National Term</th>
                        <th>English term</th>
                        <th>National definition</th>
                        <th>English definition</th>
                        <th>English document</th>
                        <th>National document</th>
                        <th>Year</th>
                        <th>Link to the national document</th>
                        <th>Link to the English document</th>
                    </tr>
                </thead>
                <tr slot-scope="{item}">
                    <td>{{item.country}}</td>
                    <td>{{item.national_term}}</td>
                    <td>{{item.english_term}}</td>
                    <td>{{item.national_definition}}</td>
                    <td>{{item.english_definition}}</td>
                    <td>{{item.english_document}}</td>
                    <td>{{item.national_document}}</td>
                    <td>{{item.year}}</td>
                    <td>{{item.national_document_link}}</td>
                    <td>{{item.english_document_link}}</td>
                </tr>
            </filterable>
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
        }
    }
</script>

<style scoped>

</style>