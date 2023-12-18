<template>
    
        <div class="plans-section" id="rooms">
            <a href="book" class="bck">Back</a>
            <div class="container">
                <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
				<div class="priceing-table-main" v-for="room in room">
                    <div class="col-md-6 price-grid">
					    <div class="price-block agile" >
						    <div class="price-gd-top">
						        <img src="/images/{{ room.file }}" alt="image1" />
							    <h4>Room {{ room.roomNo }}</h4>
						    </div>
						    <div class="price-gd-bottom">
			                    <div class="price-list">
									<ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-regular fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-regular fa-star" aria-hidden="true"></i></li>
				                    </ul>
							    </div>
							    <div class="price-selet">	
								    <h3><span>₱</span>{{ room.Price }}</h3>						
								    <a href="" >Rent Now</a>
							    </div>
						    </div>
					    </div>
				    </div>
                </div>
                <div class="priceing-table-main">
                    <div class="col-md-6 price-grid">
					    <div class="price-block agile">
						    <div class="price-gd-top">
						        <img src="images/2.jpg" alt="image2" />
							    <h4>Room 2</h4>
						    </div>
						    <div class="price-gd-bottom">
			                    <div class="price-list">
									<ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-regular fa-star" aria-hidden="true"></i></li>
				                    </ul>
							    </div>
							    <div class="price-selet">	
								    <h3><span>$</span>900</h3>						
								    <a href="room1" >Rent Now</a>
							    </div>
						    </div>
					    </div>
				    </div>
                </div>
            </div>
        </div>
        <!-- <table>
            <tr>
            <th>Room No</th>
            <th>Room type</th>
            <th>Categ</th>
            <th>Price</th>
            <th>File</th>
            <th>Max Person</th>
            <th>Status</th>
        </tr>
        <tr v-for="room in room">
            <td>{{ room.roomNo }}</td>
        </tr>
        </table> -->
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

        h3 {
            font-style: 'Raleway';
            text-transform: uppercase;
            color: #333;
        }

        .price-list ul {
            padding: 0px;
            list-style: none;
        }
        .price-gd-top {
            position: relative;
            margin-top: 10vh;
            border: 1px solid black;
            text-align: center;
            position: relative;
        }
        .price-gd-top h4 {
            font-size: 1.5em;
            color: #fff;
            padding: 0.4em 1em;
            background: #0f2453;
            font-weight: 300;
            position: absolute;
            top: 13em;
            right: 0em;
        }
        .price-selet h3 {
            padding: 0.2em 0em 0em 0em;
            font-size: 1.7em;
            float: left;
            margin-left: 20px;
        }
        .price-selet h3 span {
            color: #ef0404;
            font-size: 31px;
            margin-right: 5px;
        }
        .price-gd-bottom {
            border: 1px solid black;
            background: #fff;
            text-align: center;
            padding: 1.8em 0em 1em;
        }
        .price-gd-top img {
            width: 515px;
            height: 350px;
        }
        .price-list ul li {
            padding: 0.5em 0em;
            font-size: 0.9em;
            color: #2b2b2b;
            display: inline-block;
        }
        .price-selet {
            padding: 1em 0em;
            text-align: center;
            background: #fff;
        }
        .price-selet a {
            font-size: 1.1em;
            color: #fff;
            display: block;
        }
        .price-selet a {
            font-size: 0.9em;
            color: #000000;
            display: inline-block;
            padding: 0.5em 2em;
            background: #ffce14;
            text-decoration: none;
            border: 2px solid #ecbf11;
        }
        .price-block {
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.15);
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }
        .price-block:hover,.w3layouts-pricing:hover,.w3-agileits-vpn-grid:hover {
            transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            z-index: 1;
        }
    </style>

<script>
import headers from '@/components/admin/include/header.vue'
import axios from 'axios'

export default{
    components:{
        headers
    },
    data(){
        return{
            room:[],
        }
    },

   
    created(){
        this.getRoom();
    },

    methods:{
        async getRoom(){


            try {
                
                const inf = await axios.get('admin/view')
                this.room = inf.data;
                
            } catch (error) {
                
            }
        }
    }
}
</script>