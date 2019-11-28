<?php 
//check if there is an existing session if there is,
//it will redirect to index.php
session_start();
if(isset($_SESSION['user'])){
    header("location:index.php");
}
//getting database and server info
require "config.php";
//checking if the submit button is clicked
//if it's clicked it will retrieve the
//values from the textbox
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from aics.admin where username = :user and password = :pass ";
    $query = $conn->prepare($sql);
    $query -> bindparam(':user', $username);
    $query -> bindparam(':pass', $password);
    $query -> execute();
    //counting the results from the sql string query
    $count = $query->rowCount();
    if($count > 0) {
        //getting the id from the query
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $eid = $row['id'];
        $nickname = $row['nickname'];
    }
    session_start();
    //setting the session value using the id
    $_SESSION['user'] = $eid;  
    $_SESSION['nickname'] = $nickname;
    echo "Accepted ID: " . $eid;
    header("location:index.php");
    }
    else{
        echo "error";
    }
    
}
?>

<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("waterfall.jpg");
  min-height: 100%;
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
      <a href="hymn.html">HYMN</a>
      <a href="strand.html">STRANDS</a>
    </div>
  </div>
  <a href="facilities.html" onclick="w3_close()" class="w3-bar-item w3-button">FACILITIES</a>
  <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Go Beyond Learning</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Go Beyond Learning</span><br>
    <span class="w3-large">Learning is a treasure that will follow its owner everywhere.</span>
    
    
    <div class="w3-container">
  <br>
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-padding-large w3-large">Learn more and start today</button>
      
        <div id="id01" class="w3-modal ">
          <div class="w3-modal-content w3-card-5 w3-animate-zoom " style="max-width:600px">
      
            <div class="w3-center"><br>
              <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-red w3-xlarge w3-hover-gray w3-display-topright" title="Close Modal">&times;</span>
              <img src="avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
            </div>
      
            <form class="w3-container" action="aics.php" method="POST">
              <div class="w3-section">
                <label><b>Username</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
                <label><b>Password</b></label>
                <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="login">Login</button>
               
              </div>
            </form>
      
            <div class="w3-container w3-border-top w3-padding-16 ">
             <span class="w3-left w3-padding w3-hide-small"> <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button></span>
              <span class="w3-right w3-padding w3-hide-small"><button class="w3-button w3-green w3-section w3-padding" type="submit"><a href="user.php">Not an admin?</a></button></span>
              
            </div>
      
          </div>
        </div>
      </div>
  </div> 

</header>

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
</body>
</html>
