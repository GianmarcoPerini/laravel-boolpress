<template>
    <div class="container">
        <CardList />
    </div>
</template>

<script>
import CardList from "./cards.vue";
    
    export default {
        name: 'App', 
        components:{
            CardList,
        },
        data(){
            return {

            }
        },
        mounted(){
            console.log('ciao');
        }
    }
</script>

<style lang='scss'>


</style>