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
   
<section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Signup
              </h2>
            </div>
            <form action="<?php base_url();?>SignupController/Insert" method = "post">
              <div>
                <input type="text" name="LastName" placeholder="Last Name" required/>
              </div>
              <div>
                <input type="text" name="FirstName" placeholder="First Name"required/>
              </div>
              <div>
                <input type="text" name="ContactNo" placeholder="Contact Number" required/>
              </div>
              <div>
                <input type="text" name="username" placeholder="Username" required/>
              </div>
              <div>
                <input type="text" name="email" placeholder="Email" required/>
              </div>
              <div>
                <input type="password" name="password" placeholder="Password" required/>
              </div>
              <button type ='submit'>Signup</button>
              <a class="small text-muted" href="#!">Forgot password?</a>

            <!-- Login Link -->
            <p class="mb-2 pb-lg-2" style="color: #393f81;">Already have an account? <a href="/login"
            style="color: #blue;">Login here</a></p>
            </form>
          </div>
        </div>
</body>
</html>