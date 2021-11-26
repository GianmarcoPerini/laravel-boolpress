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
    <div class="d-flex justify-content-center">
        <button v-if="currentPage > 1" @click="list( currentPage -1 )">Prev</button>
        <button v-for="n in lastPage" :key="n" @click="list( n )"
        :class="n == currentPage ? 'bg-primary' : ''">{{n}}</button>
        <button v-if="currentPage < lastPage" @click="list( currentPage +1 )">Next</button>
    </div>
    </div>
</template>

<script>
export default {
    name: 'CardList',
    data(){
        return {
            BigData: [],
            currentPage: null,
            lastPage: null,
        }
    },

    methods:{
        list(page){
            axios.get(`/api/posts/?page=${page}`)
            .then((res)=>{
                this.BigData = res.data.posts.data
                this.currentPage = res.data.posts.current_page
                this.lastPage = res.data.posts.last_page
                console.log(this.currentPage);
            })
        },
    },

    mounted(){
        this.list(this.currentPage)
        console.log(this.currentPage);
    }

}
</script>

<style>

</style>