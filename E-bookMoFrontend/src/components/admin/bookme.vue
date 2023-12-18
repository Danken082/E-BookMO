<template>
    <headers/>
    <div class="container">
        <h1>Rent and Book Now in our Transient and Apartment</h1>
            <div class="apartment">
                <h2>Apartment</h2>
                <img src="images/apartment.jpg" alt="apartment" width="300" height="300"><br><br>
                <a class="button" href="rent" >Rent</a>
            </div>

            <div class="transient">
                <h2>Transient</h2>
                <img src="images/transient.jpg" alt="transient" width="300" height="300"><br><br>
                <a class="button" href="transient" >Book</a>
            </div>
        </div>
</template>

    <style>
        .body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-style: 'Raleway';
            text-transform: uppercase;
            letter-spacing: 4px;
            color: #333;
        }

        h2 {
            color: #555;
        }

        .apartment, .transient {
            width: 45%;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            box-sizing: border-box;
            display: inline-block;
            background-color: whitesmoke;
        }

        .button {
            display: inline-block;
            background-color: red;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .button:hover {
            background-color: yellow;
            color: black;
        }
    </style>

<script>
    import headers from '@/components/admin/include/header.vue'

    export default{
        components:{
            headers
        }
    }
</script>