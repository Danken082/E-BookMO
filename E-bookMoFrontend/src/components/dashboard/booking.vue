<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h1 class="h3 mb-0 text-gray-800">Booked</h1></nav>
                <div class="container-fluid">
                    <div class="col-lg-12">
		                <div class="row mt-3">
			                <div class="col-md-12">
				                <div class="card">
					                <div class="card-body">
						                <table class="table table-bordered">
                                            <thead>
                                            	<th>#</th>
                                            	<th>Category</th>
                                            	<th>Reference</th>
                                            	<th>Status</th>
                                            	<th>Action</th>
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