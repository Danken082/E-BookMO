<template>
    <headers/>
    <div class="container">
        <div class="apartment">
            <h2>Room 1</h2>
            <img src="images/2.jpg" class="image1" alt="apartment" width="300" height="300"><br><br>
            <a class="button" href="room2" >Book Now</a>
        </div>
        <a href="rent" class="bck">Back</a>
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

        p{
            position: absolute;
            right: 300px;
            width: 300px;
            border: 3px solid gray;
            padding: 10px;
        }

        .image{
            border-radius: 8px;
            width: 300px;
            height: 300px;
            float: left;
        }

        .apartment {
            width: 100%;
            height: 100%;
            padding: 50px;
            border: 1px solid #ccc;
            margin: 10px;
            box-sizing: border-box;
            display: inline-block;
            background-color: whitesmoke;
        }

        .bck {
            display: inline-block;
            background-color: red;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .bck:hover {
            background-color: yellow;
            color: black;
        }

        .button {
            display: inline-block;
            background-color: blue;
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