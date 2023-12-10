<template>
  <headers/>

  <section class="about_section layout_padding long_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/4C.jpg" alt="4C">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2 style="color: #FD8D14;">
              About Us
            </h2>
          </div>
          <p style="color:rgb(80, 78, 78);">
            This site is for reservation for our appartment and trancient you are free to visit our site.
          </p>
          <a href="/visit">
            Visit Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<br>
<br>
<br>
<br>

<!-- info section -->
<section class="info_section long_section" style="background-color:#C51605 ;">

  <div class="container">
    <div class="contact_nav">
      <a href="">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span>
          Call : 09361312990
        </span>
      </a>
      <a href="">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <span>
          Email : demo@gmail.com
        </span>
      </a>
      <a href="https://web.facebook.com/profile.php?id=100071356236970">
        <i class="fab fa-facebook-f"></i>
        <span>
          Facebook: 4C's Room Rental, Apartment, Hotel and Transient 
        </span>
      </a>
    </div>
  </div>


</section>
</template>

<script>
  import headers from '@/components/admin/include/header.vue'

  export default{
      components:{
          headers
      }
  }
</script>