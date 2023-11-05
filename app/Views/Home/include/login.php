<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="<?php base_url();?>images/bg.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>4C's</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php base_url();?>css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="<?php base_url();?>css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php base_url();?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php base_url();?>css/responsive.css" rel="stylesheet" />

</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
<div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

         
          <div class="modal-header">
            <h4 class="modal-title">Signin</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

         
          <div class="modal-body">
          <section class="contact_section  long_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <div class="heading_container">
              </div>
              <?php if(session()->getFlashdata('msg')):?>
                      <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                      </div>
                  <?php endif;?>
              <form action="<?php base_url();?>LoginController/login" method = "post">
                <div>
                  <input type="text" name="email" placeholder="Enter Email or Username" required/>
                </div>
                <div>
                  <input type="password" name="password" placeholder="Password" required/>
                </div>
                <button type ='submit'>Login</button>
                <a class="small text-muted" href="#!">Forgot password?</a>
                <p class="mb-2 pb-lg-2" style="color: #393f81;">Don't have an Account? <a href="/signup"
                                              style="color: blue;">Register</a></p>
              </form>
            </div>
          </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
   
      </body>
      </html>