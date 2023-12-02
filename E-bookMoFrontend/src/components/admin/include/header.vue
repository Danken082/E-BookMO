<template>

  <!-- header section strats -->
  <header  class="header_section long_section px-0">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="">
        <span>
         4C's
        </span>
      </a>
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center" >
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="visit">Visit Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="book">Get Room</a>
            </li>
          </ul>
        </div>

        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        </div>
        <form class="form-inline">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        <div class="quote_btn-container">
          <a href="login">
            <span>
              Login
            </span>
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>




        </div>
      </div>
    </nav>
  </header>
 <br>


  <!-- end header section -->

</template>


<style scoped>
.navbar-nav .nav-item a:hover {
color: #FD8D14;
}

.quote_btn-container a:hover {
color: #FD8D14;
}

.nav_search-btn:hover {
background-color: #FD8D14;
color: #fff; /* Change text color when button is hovered */
}

/* Style for the search bar container */
.input-group.rounded {
width: 200px; /* Set your desired width */
margin: 10px; /* Adjust margin as needed */

}

/* Style for the search input */
.form-control.rounded {
border: 2px solid #ccc; /* Set border color */
border-radius: 10px; /* Set border radius */
padding: 10px; /* Adjust padding as needed */
transition: border-color 0.3s; /* Add transition for a smooth effect */
}

/* Hover effect for the search input */
.form-control.rounded:hover {
border-color:  #FFE17B; /* Set hover border color */
}

/* Focus effect for the search input */
.form-control.rounded:focus {
border-color:  #FFE17B; /* Set focus border color */
box-shadow:  #FFE17B; /* Optional: Add focus box shadow */
}


</style>

