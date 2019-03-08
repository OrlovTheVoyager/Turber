<template>
    <div>
        <div class="row">
            <i class="ion ion-ios-search"></i>
            <input type="text" style="margin: 20px 0 5px 0;
                float: right;
                height: 30px;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;">
        </div>
        <table class="highlight">
            <thead>
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
        </table>
        <button v-bind:class="[{ disabled: !pagination.prev_page }]" @click="fetchPosts(pagination.prev_page)">Previous</button>
        <p>Page {{ pagination.current_page }} of {{ pagination.last_page }}</p>
        <button v-bind:class="[{ disabled: !pagination.next_page }]" @click="fetchPosts(pagination.next_page)">Next</button>
        <p>Total number of posts: {{ pagination.total }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: [],
            pagination: {}
        }
    },
    created() {
        this.fetchPosts('/test?page=1');
    },
    methods: {
        fetchPosts(page_url) {
            page_url = page_url || '/test'
            axios.get(page_url)
            .then( response => {
                this.posts = response.data.data;
                this.pagination = {
                    current_page: response.data.current_page,
                    last_page: response.data.last_page,
                    total: response.data.total,
                    next_page: response.data.next_page_url ,
                    prev_page: response.data.prev_page_url
                };
                console.log(response.data.data);
            })
            .catch(function (error) {
                console.log(error);
            })
        }
    }
}
</script>
