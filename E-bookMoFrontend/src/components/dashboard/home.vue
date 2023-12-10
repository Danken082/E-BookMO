<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card-body">
                        <h1>Welcome Administrator!</h1>
                        <hr class="card-body d-none d-md-block">
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