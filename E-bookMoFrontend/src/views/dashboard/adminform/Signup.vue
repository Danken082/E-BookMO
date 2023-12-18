<template>
  <section class="text-center">
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
  
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">
        <h1>Welcome Admin</h1><br>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h4 class="fw-bold mb-5">Sign up now!</h4>
            <form @submit.prevent="register">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" 
                    id="LastName" 
                    name="LastName" 
                    class="form-control" 
                    v-model="LastName" 
                    required/>
                    <label class="LastName">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" 
                    id="FirstName" 
                    name="FirstName" 
                    class="form-control" 
                    v-model="FirstName" 
                    required/>
                    <label class="FirstName">Firstname</label>
                  </div>
                </div>
                    <input type="hidden" 
                    id="userRole" 
                    name="userRole" 
                    v-model="userRole" />
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" 
                    id="contactNo" 
                    name="contactNo" 
                    class="form-control"  
                    v-model="contactNo" 
                    required/>
                    <label class="contactNo">Contact Number</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" 
                    id="username" 
                    name="username" 
                    class="form-control"  
                    v-model="username" 
                    required/>
                    <label class="username">Username</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" 
                    id="email" 
                    name="email" 
                    class="form-control"  
                    v-model="email" 
                    required/>
                    <label class="username">Email</label>
                  </div>
                </div>
              
              <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="password" 
                    id="password" 
                    name="password" 
                    class="form-control"  
                    v-model="password" 
                    required/>
                    <label class="password">Password</label>
                  </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
              <p class="small fw-bold mt-2 pt-1 mb-0" style="color: black;">Already have an account? <a href="adminlogin" class="link-danger">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  </template>
  
  <script>
  export default{
    data(){
      return {
        LastName: '',
      FirstName: '',
      userRole:'Admin',
      ContactNo: '',
      username: '', 
      email: '',
      password: '',  
            };
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

                this.$refs.registerForm.reset();
            } catch (error) {
                console.log(error);
            }

      },
  
    }
  };
  </script>