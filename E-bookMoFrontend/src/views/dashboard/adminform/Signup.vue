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
            <form @submit.prevent="register()" class action="/register" method="post">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="fullname" name="fullname" class="form-control" v-model="fullname" required/>
                    <label class="fullname">Fullname</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="username" name="username" class="form-control"  v-model="username" required/>
                    <label class="username">Username</label>
                  </div>
                </div>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control"  v-model="password" required/>
                <label class="password">Password</label>
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
        fullname: '',
        username: '',
        password: '',
      };
    },
    methods:{
      register(){
        const form = new FormData()
        form.append('fullname', this.fullname)
        form.append('username', this.username)
        form.append('password', this.password)
      }
    }
  };
  </script>