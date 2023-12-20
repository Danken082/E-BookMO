<template>
    <div id="wrapper">
        <sidebar/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="card col-lg-12">
                    <div class="card-body">
                        <table class="table-striped table-bordered col-md-12">
                            <thead>
                                <tr>
                                    <th class="text-center"> User ID</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">User Role</th>
                                </tr>
                                    <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                <tr v-for="user in user">
                                    <td class="text-center">{{ user.UserID }}</td>
                                    <td class="text-center">{{ user.userRole }}</td>
                                    <td class="text-center">{{ user.username }}</td>
                                    <td><button class="btn btn-danger" @click="deleteUser(user.UserID)">Delete</button></td>
     
                                </tr>
                                
                            </tbody>
		                </table>
			        </div>
		        </div>
	        </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
import sidebar from '@/components/dashboard/include/sidebar.vue'
    export default{
        components:{
            sidebar
        },
        data(){
            return{
                userInfo:[]
            }
        },

        created(){
            this.getUser()
        },
        methods:{
            async getUser(){
                try {
                    const ans = await axios.get('admin/user')
                    this.userInfo = ans.data
                } catch (error) {
            console.log(error)           
                }
            }
        }
    }
</script>