<template>
  <headers/>  
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
            <form action="" method = "post">
              <div>
                <input type="text" name="LastName" placeholder="Last Name" required/>
              </div>
              <div>
                <input type="text" name="FirstName" placeholder="First Name" required/>
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
            style="color: blue">Login here</a></p>
            </form>
          </div>
        </div>
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