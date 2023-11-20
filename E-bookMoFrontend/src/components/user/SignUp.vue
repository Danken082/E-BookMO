<template>
   <title>hello</title>
   <section class="contact_section  long_section">
   <div class="back">
        <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
             <div class="move">
              <h2>
                <br>
                Signup
              </h2>
            </div>
            <form>
              <div class="con-spacing">
          
                <input class="con" type="text" name="LastName" placeholder="Last Name" required/>
              </div>
              <div class="con-spacing">
                <input class="con" type="text" name="FirstName" placeholder="First Name" required/>
              </div>
              <div class="con-spacing">
                <input class="con" type="text" name="ContactNo" placeholder="Contact Number" required/>
              </div>
              <div class="con-spacing">
                <input class="con" type="text" name="username" placeholder="Username" required/>
              </div>
              <div class="con-spacing">
                <input class="con" type="text" name="email" placeholder="Email" required/>
              </div>
              <div class="con-spacing">
                <input class="con" type="password" name="password" placeholder="Password" required/>
              </div>
              <button type ='submit' class="btn">Signup</button>
              <a class="small text-muted" href="#!">  Forgot password?</a>

            <!-- Login Link -->
            <p class="mb-2 pb-lg-2">Already have an account? <a href="/login"
            style="color: #blue; text-decoration:none;">Login here</a></p>
            <br>
            </form>
          </div>
          </div>
        </div>
        </div>
        </div>
          </div>
          </section>
        
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,500&family=Roboto:wght@500&display=swap');
h2{
  margin-left: 20px;
}
.btn{
  margin-left: 30px;
  width: 100px;
  height: 40px;
  background-color: #F9D949;
  background:#F9D949;
  border-color: #F9D949; 
  color: #E8F6EF;
  font: 16px Poppins, sans-serif;
}
.btn:hover{
  background-color: whitesmoke;
  border-color:#F9D949;
  color: #F9D949;
}
a.small.text-muted{
  color: #6C757D;

}
a.small.text-muted:hover{
  color: skyblue;
}
a{
  text-decoration: none;
  color: #E8F6EF;
  
}
p{
  color: #3C486B;
  margin-left: 30px;
}
p a{
  
  color:black;
  color: #E8F6EF;
  font: sans-serif;
  width: 30px;
  
}
.back{
  width: auto;
  height: auto;
  margin: auto;
  background-color: #F45050;
}
.con{
  margin-left: 20px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 width: 100vh;
 height: 40px;
 border: 1px solid;
 border-radius: 10px;
 text-align: center;
}
.con::placeholder{
  font-size: 15px; 
  text-align: center;
}
.con-spacing{
  height: 50px;
}

@media screen and(max-width: 600px) {
  .con{
  margin:auto;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 width: 50vh;
 height: 10px;
 border: 1px solid;
 border-radius: 10px;
 text-align: center;
}
}
</style>