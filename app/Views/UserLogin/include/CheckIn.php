<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="<?php base_url();?>images/bg.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Edgecut</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
<section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <?php foreach($room as $room):?>
              <img src="<?php base_url();?>images/<?=$room['file'];?>" alt="">
            </div>
            <div class="detail-box">
              <h5>
               Room <?= $room['roomNo']?>
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>P</span> 100.0<?= $room['Price']?>
                </h6>
                <a href="">
                CheckIn
              </a>
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>                                    
        
        </div>
      </div>
    </div>
  </section>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>    
</body>
</html>