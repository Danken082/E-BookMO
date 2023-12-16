<template>
    <rent/>
    <div class="container">
        <h1>Book Now!</h1>
            <div class="apartment">
                <h2>Apartment</h2>
                <img src="images/apartment.jpg" alt="apartment" width="300" height="300"><br><br>
                <button class="btn" type="rent">Rent</button>
            </div>
    </div>
</template>

    <script>
    import headers from '@/components/admin/include/header.vue'

    export default{
        components:{
            headers
        }
    }
</script>