<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<section class="vh-110" style="background-color: #183432;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="/registerAcc" method="post">

                                    <div class="d-flex align-items-center mb-1 pb-1">
                                        <img src="favicon.png" alt="" srcset="">
                                        <span class="h1 fw-bold mb-0">Furni</span>
                                    </div>

                                    <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Sign up for an account</h5>

                                    <?php if(isset($validation)):?>
                                        <div class="alert alert-warning">
                                            <?=$validation->listErrors()?>
                                        </div>
                                    <?php endif;?>

                                    <!-- Name Field -->
                                    <div class="form-outline mb-2">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg"/>
                                        <label class="form-label" for="form2Example17">Full Name</label>
                                    </div>

                                    <!-- Email Address Field -->
                                    <div class="form-outline mb-2">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg"/>
                                        <label class="form-label" for="form2Example17">Email address</label>
                                    </div>

                                    <!-- Password Field -->
                                    <div class="form-outline mb-2">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <!-- Password Confirmation Field -->
                                    <div class="form-outline mb-2">
                                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example37">Confirm Password</label>
                                    </div>

                                    <!-- Register Button -->
                                    <div class="pt-1 mb-2">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                                    </div>

                                    <!-- Forgot Password Link -->
                                    <a class="small text-muted" href="#!">Forgot password?</a>

                                    <!-- Login Link -->
                                    <p class="mb-2 pb-lg-2" style="color: #393f81;">Already have an account? <a href="/login"
                                            style="color: #393f81;">Login here</a></p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>