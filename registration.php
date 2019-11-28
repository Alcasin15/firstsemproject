<?php
include_once ('config.php')
?>

<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

body{
  background-position: center;
  background-size: cover;
  background-image: url("flowerflower.jpg");
  background-repeat:no-repeat;
}
.w3-bar .w3-button {
  padding: 16px;
}


.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  margin-top:1%;
}
.asian{
    
    margin-top:5%;
    margin-left:28%;
}

.container{

    height:40%;
    width:50%;
    text-align:center;
    padding-top:5%;
    padding-bottom:44%;
    padding-left:40%;
}
input[type=text], select {
  width: 150%;
  padding: 12px 20px;
  margin: 8px 4;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date] {
  width: 150%;
  padding: 12px 20px;
  margin: 8px 4;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin-left: 5px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}



</style>
<body>
<!-- DROP DOWN MENU FOR ABOUT AICS
*VISION 
*MISSION
LOCATION
STRANDS -->
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="aics.php" class="w3-bar-item w3-button w3-wide">AICS</a>
    <!-- Right-sided navbar links -->
     <div class="w3-right w3-hide-small">
      <div class="dropdown">
         
      <a href="about aics.html" class="w3-bar-item w3-button"> ABOUT AICS  </a>
      <div class="dropdown-content">
          <a href="vision.html">VISION</a>
          <a href="mission.html">MISSION</a>
          <a href="hymn.html">HYMN</a>
          <a href="strand.html">STRANDS</a>
          <a href="registration.php">ONLINE REGISTRATION</a>
        </div>
      </div>
      <a href="facilities.html" class="w3-bar-item w3-button"> FACILITIES</a>
   
      <a href="contact.html" class="w3-bar-item w3-button"> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  
  <div class="dropdown">
        <a href="about aics.html" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT AICS</a>
          <div class="dropdown-content">
            <a href="vision.html">VISION</a>
            <a href="mission.html">MISSION</a>
            <a href="hymn.html">HYMNS</a>
            <a href="strand.html">STRANDS</a>
          </div>
        </div>
  <a href="facilities.html" onclick="w3_close()" class="w3-bar-item w3-button">FACILITIES</a>

  <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
    <div class="asian"><h1 style="font-family:'ZCOOL XiaoWei', serif">ASIAN INSTITUTE OF COMPUTER STUDIES</h1></div>

<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<div class="container">
<form action="registrationnew.php" method="POST">
        <label for="">First Name</label><br>
        <input type="text" name="firstname" required placeholder="First Name" size="35"><br>
        <label for="">Last Name: </label><br>
        <input type="text" name="lastname" required placeholder="Last Name" ><br>
        <label for="">Middle Name: </label><br>
        <input type="text" name="middlename" required placeholder="Middle Name"><br>
        <label for="">Age: </label><br>
        <input type="text" name="age" required placeholder="Age"><br>
        <label for="">Gender</label><br>
        <input type="text" name="gender" required placeholder="Gender"><br>
        <label for="">Birthdate</label><br>
        <input type="date" name="birthdate" required ><br>
        <label for="">Contact No.</label><br>
        <input type="text" name="Contact" required placeholder="Contact No."><br>
        <label for="">Place you currently live:</label><br>
        <input type="text" name="place" required placeholder="Place you curre...."><br><br>
        <input type = "submit" class="btn btn-success" name = "add" value = "REGISTER">
        
    </form>
</div>


      <footer class="container-fluid text-center">
            <a href="vision.html" title="To Top">
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Copyright @2019-2020 Asian Institute of Computer Studies. All Rights Reserved</p>
          </footer>

</body>
</body>
</html>
