<template>
    <div>
        <form @submit.prevent="insert">
        <label for="roomNo">Room Number:</label>
        <input type="text" v-model="roomNo" placeholder="Room Number">
        <label for="roomType">Room Type:</label>
        <input type="text" v-model="roomType" placeholder="Room Type">
        <label for="Price">Price:</label>
        <input type="text" v-model="Price" placeholder="Price">
        <label for="file">Image:</label>
        <input type="text" v-model="file" placeholder="Insert Room Image">
        <label for="MaxPerson">MaxPerson</label>
        <input type="text" v-model="MaxPerson" placeholder="Max Person">
        <label for="Status">Status</label>
        <input type="text" v-model="Status" placeholder="Status">
    </form>
    </div>

</template>

<script>
    export default{
        data(){
            return{
                roomNo:"",
                roomType:"",
                Price:"",
                file:"",
                MaxPerson:"",
                Status:""
                
            }
        },
        methods:{
            async insert(){
                console.log("hello");
            }
        }
    }

</script>