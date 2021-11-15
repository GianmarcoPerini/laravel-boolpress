<template>
    <div>
        <div v-for="data in BigData" :key="data.id">
            {{data.author}}
        </div>
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