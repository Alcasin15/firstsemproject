<?php 
session_start();
session_destroy();

?>

<html>
<style>

body{
     background-image: url("flower.jpg");
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
 
}
.text{
    font-size:30px;
    font-family:'Dancing Script', cursive;
    text-align:center;
    margin-top:150px;
    
}
button{
margin-left:50%;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<body>

<div class="text">
<h1>Thank you for logging in!!!</h1>
</div>
<button class=" btn btn-success" value="LOGIN"><a href="index.php">LOGIN</a></button>
</body>
</html>

