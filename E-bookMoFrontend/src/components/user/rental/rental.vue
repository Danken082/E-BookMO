<template>
    <nav id="sidebar">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
</nav>

<div id="content">
    <h2>Main Content</h2>
    <p>This is the main content of your page.</p>
</div>


</template>
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
    background-color: #333;
    position: fixed;
    left: 0;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

#sidebar a {
    padding: 15px 20px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

#sidebar a:hover {
    color: #f1f1f1;
}

#content {
    margin-left: 250px;
    padding: 16px;
}
</style>