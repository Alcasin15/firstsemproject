


<?php 
include_once ('config.php');
if(isset($_POST['addinguser'])){
    $username = $_POST['usrnme'];
    $password = $_POST['pasword'];
    $nickname = $_POST['nickname'];
    if(empty($username) || empty($password) || empty($nickname)){
        echo "Incomplete Fields";
    }
    else{
        $sql = "insert into aics.users ";
        $sql .= "(username, password, nickname) ";
        $sql .= "values (:user, :pass, :nickname)";
        $query = $conn ->prepare($sql);
        $query -> bindparam(':user', $username);
        $query -> bindparam(':pass', $password);
        $query -> bindparam(':nickname', $nickname);
        $query ->execute();
        echo "<p style=color:green; font-size:40px;><a href = \"index.php\">Success</a></p> <br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

.w3-bar .w3-button {
  padding: 16px;
}

body{
  background-position: center;
  background-size: cover;
  background-image: url("petals.jpg");
  background-repeat:no-repeat;
 
}



footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  margin-top:2%;
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
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 4;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 4;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 50%;
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
    <title>Add User</title>
</head>
<body>
    <div class="container">
    <h1>Add User</h1>
    <form action="addinguser.php" method="POST">
    <label for="">User Name</label><br>
        <input type="text" name="usrnme" required placeholder ="User Name" size="35"><br><br>
        <label for="">Password </label><br>
        <input type="password" name="pasword" required placeholder="Password" ><br><br>
        <label for="">Nickname </label><br>
        <input type="text" name="nickname" required placeholder="Nickname"><br><br>
        
        <input type = "submit" class="btn btn-success" name = "addinguser" value = "REGISTER">
        
      
    </form>

    </div>
    <footer class="container-fluid text-center">
            <a href="vision.html" title="To Top">
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Copyright @2019-2020 Asian Institute of Computer Studies. All Rights Reserved</p>
          </footer>
</body>
</html>