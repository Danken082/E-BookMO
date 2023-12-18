<template>
    <nav id="sidebar">
        <a href="/Transient">Transient</a>
        <a href="/Appartment">Appartment</a>
        <a href="#">Status</a>
        <a href="#">Profile</a>
    </nav>
    
    <div id="content">
    <rent/>
    </div>        
    

</template>


<script>

    import rent from '@/components/admin/rent.vue'

    export default{
        components:{
            rent
        }
    }
</script>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

#sidebar {
    width: 250px;
    height: 100%;
    background-color: #333;
    position: fixed;
    left: 0;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
    transition: 0.5s;
}

#sidebar a {
    padding: 15px 20px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

#sidebar a:hover {
    color: #f1f1f1;
}

#content {
    margin-left: 250px;
    padding: 16px;
}

@media screen and (max-width: 600px) {
    #sidebar {
        width: 0;
    }

    #content {
        margin-left: 0;
    }
}
</style>