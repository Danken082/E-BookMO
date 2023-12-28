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
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="userInfo in userInfo">
                                    <td class="text-center">{{ userInfo.UserID }}</td>
                                    <td class="text-center">{{ userInfo.username }}</td>
                                    <td class="text-center">{{ userInfo.userRole }}</td>
                                    <td><button class="btn btn-danger" @click="deleteUser(userInfo.UserID)">Delete</button></td>
     
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
            async deleteUser(UserID){
                await axios.post('admin/deleteUser',{
                    userID: UserID
                })
                this.getUser()
            },
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