<template>
    <form @submit.prevent="Insert">
    <label for="name">Name</label>
    <input type="text" v-model="name" placeholder="name">
    <label for="username">Username</label>
    <input type="text" v-model="username" placeholder="username">
    <button type="submit">submit</button>

    </form>

</template>

<script>
import axios from 'axios'

export default{

    data(){
        return{
            name:"",
            username:"",

        }
    },
    methods:{
        async Insert(){
            try{
                const ins = await axios.post("/try  ", {
                    name: this.name,
                   username: this.username
                });
            }
            catch(error){
                console.log(error)
            }

        }
    }
}
</script>