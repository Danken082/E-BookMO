<template>
    <div id="wrapper">
        <sidebar/>
        <div id="content">
                <div class="container-fluid">
                    <h1>Dashboard</h1>
                    <div class="row">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <p>Reserved</p>
                            </div> 
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</template>

<style>
    .small-box{

    }
</style>

<script>
import sidebar from '@/components/dashboard/include/sidebar.vue'
    export default{
        components:{
            sidebar
        }
    }
</script>