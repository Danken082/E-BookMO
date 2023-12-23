<template>
    <div>
      <nav id="sidebar">
        <!-- User Profile Section -->
        <div id="user-profile" @click="viewUserProfile">
          <div class="avatar">
            <img src="path/to/user/avatar.jpg" alt="User Avatar">
          </div>
          <div class="user-info">
            <p class="user-name">John Doe</p>
            <p class="user-email">john.doe@example.com</p>
          </div>
        </div>
  
        <!-- Sidebar Links -->
        <a href="/Transient">Transient</a>
        <a href="/Appartment">Appartment</a>
        <a href="#">Status</a>
        
        <!-- Logout Link -->
        <div id="logout">
          <a href="book" @click="logout">Logout</a>
        </div>
      </nav>
  
      <div id="content">
        <rent/>
      </div>
    </div>
  </template>
  
  <script>
  import rent from '@/components/admin/rent.vue'
  import router from '@/router'; // Import your router instance
  
  export default {
    components: {
      rent
    },
    methods: {
      viewUserProfile() {
        // Navigate to the user profile page or show a modal with user information
        // You can use your router to navigate to a new page
        router.push('/user-profile'); // Update with your actual user profile route
      },
      logout() {
        // Implement your logout functionality here
        console.log('Logout clicked');
      }
    }
  }
  </script>
  
  <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  
  #sidebar {
    width: 250px;
    height: 100%;
    background-color: #c32607;
    position: fixed;
    left: 0;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
    transition: 0.5s;
  }
  
  #user-profile {
    display: flex;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid #555;
    cursor: pointer; /* Add cursor pointer for better UX */
  }
  
  .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 15px;
  }
  
  .avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%; /* Ensure the image is circular */
  }
  
  .user-info {
    color: #f1f1f1;
  }
  
  .user-name {
    font-size: 18px;
    margin-bottom: 5px;
  }
  
  .user-email {
    font-size: 14px;
  }
  
  #sidebar a {
    padding: 15px 20px;
    text-decoration: none;
    font-size: 18px;
    color: #f1f1f1;
    display: block;
    transition: 0.3s;
  }
  
  #sidebar a:hover {
    color: lightsalmon;
  }
  
  #logout {
    position: absolute;
    bottom: 20px;
    left: 20px;
  }
  
  #logout a {
    padding: 10px;
    text-decoration: none;
    color: #f1f1f1;
    font-size: 16px;
    display: block;
    transition: 0.3s;
  }
  
  #logout a:hover {
    color: lightsalmon;
  }
  
  #content {
    margin-left: 250px;
    padding: 16px;
  }
  
  @media screen and (max-width: 600px) {
    #sidebar {
      width: 0;
    }
  
    #content {
      margin-left: 0;
    }
  }
  </style>
  