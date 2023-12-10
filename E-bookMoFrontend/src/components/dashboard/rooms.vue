<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- FORM Panel -->
                        <div class="col-md-4">
                            <form action="" id="manage-category">
                        	    <div class="card">
                        		    <div class="card-header">Room Category Form</div>
                        		        <div class="card-body">
                                            <input type="hidden" name="id">
                                            <div class="form-group">
                                            	<label class="control-label">Category</label>
                                            	<input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                            	<label class="control-label">Price</label>
                                            	<input type="number" class="form-control text-right" name="price" step="any">
                                            </div>
                                            <div class="form-group">
                                            	<label for="" class="control-label">Image</label>
                                            	<input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                                            </div>
                                            <div class="form-group">
                                            	<img src="<?php echo isset($image_path) ? '../assets/img/'.$cover_img :'' ?>" alt="" id="cimg">
                                            </div>
                        		        </div>

                                        <div class="card-footer">
                                            <div class="row">
                                            	<div class="col-md-12">
                                            		<button class="btn btn-sm btn-primary col-sm-6 offset-md-3"> Save</button>
                                            		<button class="btn btn-sm btn-default col-sm-6 offset-md-3" type="button" onclick="$('#manage-category').get(0).reset()"> Cancel</button>
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
                                            	<th class="text-center">Img</th>
                                            	<th class="text-center">Room</th>
                                            	<th class="text-center">Action</th>
                                            </tr>
                            			</thead>
                            			<tbody>
                                            <tr>
                                            	<td class="text-center"></td>
                                            	<td class="text-center">
                                            		<img src="<?php echo isset($row['cover_img']) ? '../assets/img/'.$row['cover_img'] :'' ?>" alt="" id="cimg">
                                            	</td>
                                            	<td class="">
                                            		<p>Name : </p>
                                            		<p>Price : </p>
                                            	</td>
                                            	<td class="text-center">
                                            		<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-price="<?php echo $row['price'] ?>" data-cover_img="<?php echo $row['cover_img'] ?>">Edit</button>
                                            		<button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
                                            	</td>
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
import sidebar from '@/components/dashboard/include/sidebar.vue'
    export default{
        components:{
            sidebar
        }
    }
</script>