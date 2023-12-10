<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row">
                    	<!-- FORM Panel -->
                    	<div class="col-md-4">
                            <form action="" id="manage-room">
                                <div class="card">
                                    <div class="card-header">Room Form</div>
                                        <div class="card-body">
                                            <input type="hidden" name="id">
                                                <div class="form-group">
                                                    <label class="control-label">Room</label>
                                                    <input type="text" class="form-control" name="room">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="custom-select browser-default" name="category_id"></select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">Availability</label>
                                                    <select class="custom-select browser-default" name="status">
                                                        <option value="0">Available</option>
                                                        <option value="1">Unavailable</option>
                                                    </select>
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
        }
    }
</script>