<template>
  
<div class="hero_area">
    <headers/>
    <section class="slider_section long_section">
        
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                    Clean and <br> Affordable <br>Apartment <br> for you
                    </h1>
                    <p>
                     You are Finding Afordable And budget Friendly Appartment and transient?<br>
                     <br>
                     "This is the Appartment And transient For You."
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="/assets/logo.png" alt="Logo" class = "bg1">
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                    <p>
                     You are Finding Afordable And budget Friendly Appartment and transient?<br>
                     <br>
                     "This is the Appartment And transient For You."
                    </p>
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  
  <!-- about section -->

  

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &trade; <span id="displayYear"></span> 
      </p>
    </div>
  </footer>
  <!-- footer section -->
  


</template>

<script>
import headers from '@/views/StartingPage/include/header.vue'
export default{

    components:{
        headers
    }
}

</script>