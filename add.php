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
  background-image: url("pinkish.jpg");
  min-height: 100%;
}
.w3-bar .w3-button {
  padding: 16px;
}
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  margin-top:5%;
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

</script>
<div class="container">
<form action="addnew.php" method="POST">
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
        <label for="">Place he/she currently live:</label><br>
        <input type="text" name="place" required placeholder="Place he/she curre...."><br><br>
        <input type = "submit" class="btn btn-success" name = "add" value = "ADD">

    
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
