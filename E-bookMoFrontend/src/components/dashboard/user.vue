<template>
    <div id="wrapper">
        <sidebar/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> New user</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="card col-lg-12">
                    <div class="card-body">
                        <table class="table-striped table-bordered col-md-12">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
		                </table>
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