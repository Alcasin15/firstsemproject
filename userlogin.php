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
if(isset($_POST['user'])){
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
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
</head>
<body>
    <form action="userlogin.php" method="POST">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>