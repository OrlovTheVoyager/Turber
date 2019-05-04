<template>
    <div>
        <table class="highlight">
            <thead>
                <tr class="search_bar">
                    <td colspan="7">
                        <input v-model="search.date_from" type="date"/>
                        <input v-model="search.date_to" type="date"/>
                        <input v-model="search.text" type="text"/>
                        <input @click="searchData(search)" type="submit"/>
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Languages</th>
                    <th>Location</th>
                    <th>From</th>
                    <th>To</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <tr v-for="post in posts" v-bind:key="post.id">
                        <td><a :href="'/posts/' + post.id">{{ post.title }}</a></td>
                        <td><a :href="'/users/' + post.user_id">{{ post.user_name }}</a></td>
                        <td>{{ post.languages }}</td>
                        <td>{{ post.location }}</td>
                        <td>{{ post.date_from }}</td>
                        <td>{{ post.date_to }}</td>
                        <td><a class="button" :href="'/posts/' + post.id">View</a></td>
                    </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="">
                        <i>Showing {{ pagination.showing }} out of {{ pagination.total }}</i>
                    </td>
                    <td colspan="5" class="pagination">
                        <a v-bind:class="[{ disabled: !pagination.prev_page }]" @click="fetchPosts(pagination.prev_page)">Previous</a>
                        Page {{ pagination.current_page }} of {{ pagination.last_page }}
                        <a v-bind:class="[{ disabled: !pagination.next_page }]" @click="fetchPosts(pagination.next_page)">Next</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: [],
            pagination: {},
            search: {
                text: '',
                date_from: '',
                date_to: ''
            }
        }
    },
    created() {
        this.fetchPosts('/test?page=1');
    },
    methods: {
        fetchPosts(page_url) {
            page_url = page_url || '/test';
            axios.get(page_url)
            .then( response => {
                this.posts = response.data.data;
                this.pagination = {
                    current_page: response.data.current_page,
                    last_page: response.data.last_page,
                    showing: this.posts.length,
                    total: response.data.total,
                    next_page: response.data.next_page_url ,
                    prev_page: response.data.prev_page_url
                };
            })
            .catch(function (error) {
                console.log(error);
            })
        },
        searchData(search) {
            console.log(search.text);
            console.log(search.date_from);
            console.log(search.date_to);
        }
    }
}
</script>
