<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row">
                    	<!-- FORM Panel -->
                    	<div class="col-md-4">
                            <form @submit.prevent="insertRoom">
                                <div class="card">
                                    <div class="card-header">Room Form</div>
                                        <div class="card-body">
                                            <input type="hidden" name="id">
                                                <div class="form-group">
                                                    <label class="control-label">Room Number</label>
                                                    <input type="Number " class="form-control" v-model="roomNo">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Room Type</label>
                                                    <select class="custom-select browser-default" v-model="roomType">
                                                        <option selected disabled>Room Type</option>
                                                        <option>Single</option>
                                                        <option>Kings Size</option>
                                                        <option>Masters BedRoom</option>
                                                        
                                                    </select>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="custom-select browser-default" v-model="RoomCateg">
                                                        <option selected disabled>Room Categoty</option>
                                                        <option >Transient</option>
                                                        <option>Appartment</option>

                                                    </select>
                                                </div>  
                                                <div class="form-group">
                                                    <label for="" class="control-label">Availability</label>                                                    
                                                    <select class="custom-select browser-default" v-model="Status">
                                                        <option selected disabled>RoomStatus</option>
                                                        <option >Available</option>
                                                        <option >Unavailable</option>
                                                    </select>
                                                    <div class="form-group">
                                                    <label class="control-label">Price</label>
                                                    <input type="No" class="form-control" v-model="Price">
                                                </div>
                                                    <div class="form-group">
                                                    <label class="control-label">File</label>
                                                    <input type="file" class="form-control" ref="file" @change="handleFileChange">
                                                    
                                                </div>
                                                    <div class="form-group">
                                                    <label class="control-label">Max Person</label>
                                                    <input type="text" class="form-control" v-model="MaxPerson">
                                                </div>
                                                </div>
                                                
                                        </div>
							
                                        <div class="card-footer">
                                            <div class="row">
                                            	<div class="col-md-12">
                                            		<button type="submit" class="btn btn-sm btn-primary col-sm-6 offset-md-3"> Save</button>
                                            		<button class="btn btn-sm btn-default col-sm-6 offset-md-3" type="button" onclick="$('#manage-room').get(0).reset()"> Cancel</button>
                                            	</div>
						                    </div>
					                    </div>
				                </div>
                            </form>
	                    </div>

                        <div class="col-md-8">
				            <div class="card">
                                <div class="card-body">
                                	<table class="table table-bordered table-hover">
                                		<thead>
                                			<tr>
                                				<th class="text-center">#</th>
                                				<th class="text-center">Category</th>
                                				<th class="text-center">Room</th>
                                				<th class="text-center">Status</th>
                                				<th class="text-center">Max Person</th>
                                                <th class ="text-center">Action</th>
                                			</tr>
                                		</thead>

                                        <tbody>
                                            <tr v-for="room in roomInfo">
                                                    <td>{{ room.roomNo }}</td>
                                                    <td>{{ room.RoomCateg }}</td>
                                                    <td>{{ room.roomType }}</td>
                                                    <td>{{ room.Status }}</td>
                                                    <td>{{ room.MaxPerson }}</td>
                                                    <td><button class="btn btn-danger" @click="delectRoom(room.roomID)">Delete</button>||<button class="btn btn-primary">Edit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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

                roomInfo:[],
                roomNo:"",
                roomType:"",
                RoomCateg:"",
                Price:"",
                selectedFile:null,
                MaxPerson:"",
                Status:""
                
            }
        },
        created(){
            this.getInfo()
        },
        methods:{
            handleFileChange(event) {
      // Handle file change event
      this.selectedFile = event.target.files[0];
    },
            async delectRoom(RoomID){
                await axios.post('admin/deleteRoom',{
                    roomID: RoomID
                })
                this.getInfo()
            },
            async getInfo(){
            try {
                const ins = await axios.get('admin/view')
                this.roomInfo = ins.data
            } catch (error) {
                console.log(error)        
            }
            },
             
            async insertRoom(){
                console.log('hello')
                const formData = new FormData();
                formData.append('roomNo', this.roomNo);
                formData.append('roomType', this.roomType); 
                formData.append('Price', this.Price);
                formData.append('file', this.selectedFile);
                formData.append('MaxPerson', this.MaxPerson);
                formData.append('RoomCateg', this.RoomCateg);
                formData.append('Status', this.Status);
                    try {
                        const room = await axios.post('admin/save', formData,{
                            headers: {
                    'Content-Type': 'multipart/form-data'
                }
                })
                console.log('Headers:', axios.defaults.headers);
                console.log('Request Data:', formData);

                console.log(room);
                this.roomNo="",
                this.roomType="",
                this.RoomCateg="",
                this.Price="",
                // previewUrl:null,
                this.MaxPerson="",
                this.Status=""
            } catch (error) {
                console.log(error);
            }
            }
        }
    }

    
</script>