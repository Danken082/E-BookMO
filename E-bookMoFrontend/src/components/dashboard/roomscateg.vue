<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row">
                    	<!-- FORM Panel -->
                    	<div class="col-md-4">
                            <form @submit.prevent="insertRoom" id="manage-room">
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
                                                    <input type="No" class="form-control" v-model="roomType">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="custom-select browser-default" v-model="RoomCategory">
                                                        <option selected disabled>Room Categoty</option>
                                                        <option >Transient</option>
                                                        <option>Appartment</option>

                                                    </select>
                                                </div>  
                                                <div class="form-group">
                                                    <label for="" class="control-label">Availability</label>                                                    
                                                    <select class="custom-select browser-default" v-model="status">
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
                                                    <input type="text" class="form-control" v-model="file">
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
                                            		<button class="btn btn-sm btn-primary col-sm-6 offset-md-3"> Save</button>
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
                                				<th class="text-center">Action</th>
                                			</tr>
                                		</thead>
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
import sidebar from '@/components/dashboard/include/sidebar.vue'
    export default{
        components:{
            sidebar
        },
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
            async insertRoom(){
                const formData = new FormData();
                formData.append('roomNo', this.roomNo);
                formData.append('roomType', this.roomType);
                formData.append('Price', this.Price);
                formData.append('MaxPerson', this.MaxPerson);
                formData.append('RoomCategory', this.RoomCategory);
                formData.append('status', this.status);
                    try {
                        const room = await axios.post('user/')
                    } catch (error) {
                        
                    }
            }
        }
    }

    
</script>