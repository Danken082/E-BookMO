<template>
  <headers/>    <br><br><br>
  <section class="vh-100">
   <div class="container-fluid h-custom">
     <div class="row d-flex justify-content-center align-items-center h-100">
       <div class="col-md-9 col-lg-6 col-xl-5">
    <img src="images/4C.jpg" alt="4C Image" class="img-fluid"> 
 
  
 </div>
 
       <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
             <br>
             <p class="lead fw-normal mb-0 me-3" style="color: black">Sign in with</p>
             <button type="button" class="btn btn-primary btn-floating mx-1 btn-facebook">
               <i class="fab fa-facebook-f"></i>
             </button>
 
             <button type="button" class="btn btn-primary btn-floating mx-1 btn-twitter">
               <i class="fab fa-twitter"></i>
             </button>

             <button type="button" class="btn btn-primary btn-floating mx-1 btn-linkedin">
               <i class="fab fa-linkedin-in"></i>
             </button>
 
           </div>
 
         <form @submit.prevent="login">
         
           <div class="divider d-flex align-items-center my-4">
             <p class="text-center fw-bold mx-3 mb-0" style="color:  rgb(65, 62, 62);">Or</p>
           </div>
 
           <!-- Email input -->
           <div class="form-outline mb-4">
             <input type="email" v-model="email" id="form3Example3" class="form-control form-control-lg"
               placeholder="Enter a valid email address" />
             <label class="form-label" for="form3Example3" style="color:  rgb(65, 62, 62);">Email address</label>
           </div>
 
           <!-- Password input -->
           <div class="form-outline mb-3">
             <input type="password" v-model="password" id="form3Example4" class="form-control form-control-lg"
               placeholder="Enter password"/>
             <label class="form-label" for="form3Example4" style="color:  rgb(65, 62, 62);">Password</label>
           </div>
 
           <div class="d-flex justify-content-between align-items-center">
             <!-- Checkbox -->
             <div class="form-check mb-0">
               <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
               <label class="form-check-label" for="form2Example3" style="color:  rgb(65, 62, 62);">
                 Remember me
               </label>
             </div>
             <a href="#!" class="text-body" >Forgot password?</a>
           </div>
 
           <div class="text-center text-lg-start mt-4 pt-2">
             <button type="submit" class="btn btn-primary btn-lg custom-button">Login</button>
             <p class="small fw-bold mt-2 pt-1 mb-0" style="color: black">Don't have an account yet?<a href="/SignUp"
                 class="link-danger">Register</a></p>
           </div>
 
         </form>
       </div>
     </div>
   </div>
   <br>
   <br>
   <br>
   <br>
 
   <div
     class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color:  #C51605 ;">
     <div class="text-white mb-3 mb-md-0">
      
     </div>
 
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
            email:'',
            password:''
          }
         
         },
         methods:{
              async login(){
              
                try {
                  const response = await axios.post('user/login',  {
                    email: this.email,
                    password: this.password
                  })
                  this.$router.push('/appartment')
                } catch (error) {
                  console.log(error)
                }
              }
            }
     } 
     </script> 
 
 
 <style scoped>
 
   .form-control {
     font-size: 13px; 
     color: #333; 
     border: 1px solid grey;
   }
   
   .form-control {
     font-size: 13px; 
     color: #333; 
     border: 1px solid grey;
   }
 
   /* Add the style for the custom button */
   .custom-button {
     background-color: #FFE17B;
     color: rgb(65, 62, 62);
     border: none;
     padding: 0.375rem 2.5rem; /* Adjust the padding as needed */
     cursor: pointer;
     transition: background-color 0.3s;
   }
 
   /* Hover effect for the custom button */
   .custom-button:hover {
     background-color: #FD8D14;
     color: white;
   }
 
   .form-control {
     font-size: 13px; 
     color: #333; 
     border: 1px solid grey;
   }
 
   /* Style for the custom button */
   .btn-facebook {
     background-color: #0000FF !important;
     color: white;
   }
 
   /* Hover effect for the custom button */
   .btn-facebook:hover {
     background-color: #FD8D14 !important;
     color: white;
   }
   
   .form-control {
     font-size: 13px; 
     color: #333; 
     border: 1px solid grey;
   }
 
   /* Style for the Twitter button */
   .btn-twitter {
     background-color: #0000FF !important;
     color: white;
   }
 
   /* Hover effect for the Twitter button */
   .btn-twitter:hover {
     background-color: #FD8D14 !important;
     color: white;
   }
 
 
   .form-control {
     font-size: 13px; 
     color: #333; 
     border: 1px solid grey;
   }
 
   /* Style for the LinkedIn button */
   .btn-linkedin {
     background-color: #0000FF !important;
     color: white;
   }
 
   /* Hover effect for the LinkedIn button */
   .btn-linkedin:hover {
     background-color: #FD8D14 !important;
     color: white;
   }

 </style>