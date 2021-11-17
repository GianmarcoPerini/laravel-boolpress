<template>
    <div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Post Author</th>
                <th scope="col">Post Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody v-for="data in BigData" :key="data.id">
            <tr>
                <th scope="row">{{ data.id }}</th>
                <td>{{ data.author }}</td>
                <td>{{ data.title }}</td>
                <td>{{ data.description }}</td>
            </tr>

        </tbody>
    </table>
    </div>
</template>

<script>
export default {
    name: 'CardList',
    data(){
        return {
            BigData: [],
        }
    },

    methods:{
        list(){
            axios.get('http://127.0.0.1:8000/api/posts')
            .then((res)=>{
                this.BigData = res.data.posts
                console.log(this.BigData);
            })
        },
    },

    mounted(){
        this.list()
    }

}
</script>

<style>

</style>