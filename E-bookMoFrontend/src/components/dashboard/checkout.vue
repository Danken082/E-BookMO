<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
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
                                                <th>Room</th>
                                            	<th>Reference</th>
                                            	<th>Status</th>
                                            	<th>Action</th>
                                            </thead>

                                            <tbody></tbody>
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