<template>
    <div>
        <form @submit.prevent="insert">
        <label for="roomNo">Room Number:</label>
        <input type="text" v-model="roomNo" placeholder="Room Number" required>
        <label for="roomType">Room Type:</label>
        <input type="text" v-model="roomType" placeholder="Room Type" required >
        <label for="Price">Price:</label>
        <input type="text" v-model="Price" placeholder="Price" required>
        <!-- <label for="file">Image:</label>
        <input type="file" ref="file"    placeholder="Insert Room Image" required> -->
        <label for="MaxPerson">MaxPerson</label>
        <input type="text" v-model="MaxPerson" placeholder="Max Person" required>
        <label for="Status">Status</label>
        <input type="text" v-model="Status" placeholder="Status" required>
        <button type="submit">Insert</button>
    </form>
    </div>

</template>

<script>

 import axios from 'axios'
    export default{
        data(){
            return{
                roomNo:"",
                roomType:"",
                Price:"",
                // file:"",
                MaxPerson:"",
                Status:""
                
            }
        },
        methods:{
            // getObjectURL(file){
            //     if (file){
            //     return URL.createObjectURL(file);
            //     }
            //     return null;
            // },
            async insert(){
              
                try {
                    const ins = await axios.post('save',{
                        roomNo: this.roomNo,
                        roomType: this.roomType,
                        Price: this.Price,
                        // file:"",
                        MaxPerson: this.MaxPerson,
                        Status: this.Status
                    
              
                    })
                    } catch (error) {
                    console.log(error)
                }
            }
        }
    }

</script>