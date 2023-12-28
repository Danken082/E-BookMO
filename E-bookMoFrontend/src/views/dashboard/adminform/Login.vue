<template>
    <div class="container">
        <!--Data or Content-->
        <div class="box-1">
            <div class="content-holder">
                <h2>Welcome Admin!</h2>
                <p>Doesn't have an account yet?</p>
                <form action="adminsignup">
                <button type="submit" >Sign up now</button>
              </form>
            </div>
        </div>

        <!--Forms-->
        <form @submit.prevent="login">
          <div class="box-2">
              <div class="login-form-container">
                  <h1>Login Form</h1>
                  <input type="text" placeholder="Username" class="input-field">
                  <br><br>
                  <input type="password" placeholder="Password" class="input-field">
                  <br><br>
                  <button class="login-button" type="submit">Login</button>
              </div><br>
              
              <!--Create Container for Signup form-->
              <div class="signup-form-container">
                  <h1>Sign Up Form</h1>
                  <input type="text" placeholder="Username" class="input-field">
                  <br><br>
                  <input type="password" placeholder="Password" class="input-field">
                  <br><br>
                  <button class="signup-button" type="button">Sign Up</button>
              </div>
          </div>
        </form>
    </div>
</template>

<script>
    
import axios from 'axios'
export default{
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
             this.$router.push('/home')
           } catch (error) {
             console.log(error)
           }
         }
       }
} 
</script> 

<style>
*{
  margin: 0px;
  padding: 0px;;
}

body{
  font-family: Arial, Helvetica, sans-serif;
}

.container
{
  display: grid;
  grid-template-columns: 1fr 2fr;
  background-color: red;
  background: linear-gradient(to bottom, rgb(6, 108, 100),  rgb(14, 48, 122));
  width: 800px;
  height: 400px;
  margin: 10% auto;;
  border-radius: 5px;
}

.content-holder
{
  text-align: center;
  color: white;
  font-size: 14px;
  font-weight: lighter;
  letter-spacing: 2px;
  margin-top: 15%;
  padding: 50px;
}

.content-holder h2
{
  font-size: 34px;
  margin: 20px auto;
}

.content-holder p
{
  margin: 30px auto;
}

.content-holder button
{
  border:none;
  font-size: 15px;
  padding: 10px;
  border-radius: 6px;
  background-color: white;
  width: 150px;
  margin: 20px auto;
}


.box-2{
  background-color: white;

  margin: 5px;
}

.login-form-container
{
  text-align: center;
  margin-top: 10%;

}

.login-form-container h1
{
  color: black;
  font-size: 24px;
  padding: 10px;
}

.input-field
{
  box-sizing: border-box;
  font-size: 14px;
  padding: 10px;
  border-radius: 7px;
  border: 1px solid rgb(168, 168, 168);
  width: 250px;
  outline: none;
}

.login-button{
  box-sizing: border-box;
  color: white;
  font-size: 14px;
  padding: 13px;
  border-radius: 7px;
  border: none;
  width: 250px;
  outline: none;
  background-color: rgb(56, 102, 189);
}

.button-2
{
  display: none;
}

.signup-form-container
{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-60%);
  text-align: center;
  display: none;
}


.signup-form-container h1
{
  color: black;
  font-size: 24px;
  padding: 20px;
}

.signup-button{
  box-sizing: border-box;
  color: white;
  font-size: 14px;
  padding: 13px;
  border-radius: 7px;
  border: none;
  width: 250px;
  outline: none;
  background-color: rgb(56, 189, 149);  
}
</style>
