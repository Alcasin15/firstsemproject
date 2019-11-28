<?php 

session_start();
if(isset($_SESSION['user'])){
    header("location:userindex.php");
}
//getting database and server info
require "config.php";
//checking if the submit button is clicked
//if it's clicked it will retrieve the
//values from the textbox
if(isset($_POST['user'])){
    $username = $_POST['usrnme'];
    $password = $_POST['pasword'];
    $sql = "select * from aics.users where username = :user and password = :pass ";
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
    header("location:userindex.php");
    }
    else{
        echo "error";
    }
}
    
?>

<!DOCTYPE html>
<html>
<title>USERS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

body{
  background-position: center;
  background-size: cover;
  background-image: url("login.jfif");
  background-repeat:no-repeat;
}
h2{
    text-align:center;
    font-size:100px;
    margin-top:2%;
}
.button{
    margin-left:48%;
    margin-top:27%;
    color:green;
}
</style>
<body>


<div class="w3-container">
<h2 >Log in as a User</h2>
<div class="button">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button  w3-large " styel="color:green" >Login</button>
</div>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="avatar1.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="user.php" method="POST">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrnme" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pasword" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="user">Login</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red"><a href="aics.php">Cancel</a></button>
       
      </div>

    </div>
  </div>
</div>


            
</body>
</html>
