<template>
    <homecontent/>
    <sidebar/>
</template>
<script>
import sidebar from '@/components/dashboard/include/sidebar.vue'
import homecontent from '@/components/dashboard/include/homecontent.vue'
    export default{
        components:{
            sidebar,
            homecontent
        }
    }
</script>