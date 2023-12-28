<template>
  <headers/>  
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/bf.jpg" alt="4C Image" 
          class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form @submit.prevent="register">
          <div class="divider d-flex align-items-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0" style="color: #FD8D14; font-family: 'Lucida Sans';" >Register Here</h3>
          </div>

          <!-- LastName input chuchu -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3" style="color: rgb(65, 62, 62);" >Last Name</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg " v-model="LastName" placeholder ="Enter your last name" style="height: 35px; "/>
          </div>

          <!-- FirstName input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3" style="color: rgb(65, 62, 62);">First Name</label>
            <input type="text" v-model="FirstName" id="form3Example4" class="form-control form-control-lg" placeholder="Enter your first name" style="height: 35px;"/>
          </div>
          <input type="hidden" v-model="userRole">
           <!-- ContactNumber input -->
           <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4" style="color: rgb(65, 62, 62);">Contact Number</label>
            <input type="text" v-model="ContactNo" id="form3Example4" class="form-control form-control-lg" placeholder="Contact Number" style="height: 35px;"/>
          </div>

           <!-- Username input -->
           <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4" style="color:  rgb(65, 62, 62);">Username</label>
            <input type="text" v-model="username" id="form3Example4" class="form-control form-control-lg" placeholder="Username" style="height: 35px;"/>
          </div>

           <!-- Email input -->
           <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4" style="color: rgb(65, 62, 62);">Email</label>
            <input type="email" v-model="email" id="form3Example4" class="form-control form-control-lg" placeholder="Enter your email"  style="height: 35px;" />
          </div>

           <!-- Password input -->
           <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4" style="color: rgb(65, 62, 62);">Password</label>
            <input type="password" v-model="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" style="height: 35px;" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0" style="color: black;">Already have an account? <a href="/Login"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div  
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 " style="background-color: #C51605;">
    <div class="text-white mb-3 mb-md-0" ></div>

    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>


</section> 

</template>

<script>
import axios from 'axios'
import headers from '@/components/admin/include/header.vue'
  export default{
    components:{
      headers
    },
    data(){
      return{
      LastName: '',
      FirstName: '',
      userRole:'Customer',
      ContactNo: '',
      username: '', 
      email: '',
      password: '',  
      }
    },
    methods:{
      async register(){
        const formData = new FormData();
      formData.append('LastName', this.LastName);
      formData.append('FirstName', this.FirstName);
      formData.append('userRole', this.userRole);
      formData.append('ContactNo', this.ContactNo);
      formData.append('username', this.username);
      formData.append('email', this.email);
      formData.append('password', this.password);
        console.log(formData.values)
      try {
        const register = await axios.post('user/register', formData,{
          headers: {
                    'Content-Type': 'multipart/form-data'
                }
                })
                console.log('Headers:', axios.defaults.headers);
                console.log('Request Data:', formData);

                console.log(register);

        this.LastName = '';
        this.FirstName = '';
        this.userRole = 'Customer';
        this.ContactNo = '';
        this.username = '';
        this.email = '';
        this.password = '';

            } catch (error) {
                console.log(error);
            }

      }
  
    }
  }
  </script>



  <style scoped>

  input.form-control {
    font-size: 13px; 
    color: #333; 
    border: 1px solid grey; 
 
  }
   /*.container-fluid {
  border: 1px solid black; 
  border-radius: 10px;
  padding: 20px;
  background-color: yellowgreen;
  }*/
  
  /* For Registration buttonnn */
  button.btn-primary {
    font-size: 18px; 
    color: rgb(45, 41, 41); 
    background-color:  #FFE17B; 
    border: 1px solid #FFE17B;
   
}

button.btn-primary:hover {
  background-color: #FD8D14;
  color: white;
  border: 1px solid #FD8D14; 
}


</style>
