<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:aics.php");   
}
require ("config.php"); 
$result = $conn->query("SELECT * FROM aics.teachers  order by id desc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
body {
  background-position: center;
  background-size: cover;
  background-image: url("pink.jpg");
  min-height: 100%;
  
}
.background{
  filter: blur(9px);
  -webkit-filter: blur(9px);
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

table, td, th {  
    border: 1px solid #ddd;
    text-align: left;
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    padding: 15px;
  }

  footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  margin-top:500px;
}
.asian{
    
    margin-top:5%;
    margin-left:28%;
}

.firstbutton{
margin-left:30px;

}



.thirdbutton{
   
   margin-left:50px;
}
</style>

    <title>LOGGED IN</title>
</head>
<body>
   <h1 style="padding-top:50px; text-align:center;color:#4284f5; font-family:'Courgette', cursive;">Teachers's Table</h1>
   <div class="thirdbutton">
   <h3 style="font-family:'Dancing Script', cursive; color:#4b42f5; ">Hello <?php echo $_SESSION['nickname'] ?></h3></div>
   <div  class="firstbutton">

   <button class="w3-button w3-green w3-section w3-padding" type="submit" ><a href="index.php"> <style></style>Go back</a></button>
   <button class="w3-button w3-green w3-section w3-padding" type="submit"  ><a href="addt.php"> <style></style>Add Teacher</a></button>
   <button class="w3-button w3-green w3-section w3-padding" type="submit" ><a href="logout.php"> <style></style>Log-out</a></button>
  </div>

   <div style="overflow-x:auto;">
   <table>
       <tr>
           <th>First Name</th>
           <th>Middle Name</th>
           <th>Last Name</th>
           <th>Gender</th>
           <th>Status</th>
           <th>Edit</th>
           <th>Delete</th>
       </tr>
       <?php 
       while($row = $result->fetch(PDO::FETCH_ASSOC)){
           echo "<tr>";
           echo "<td>" . $row['FirstName'] . "</td>";
           echo "<td>" . $row['MiddleName'] . "</td>";
           echo "<td>" . $row['LastName'] . "</td>";
           echo "<td>" . $row['Gender'] . "</td>";
           echo "<td>" . $row['Status'] . "</td>";
           echo "<td><a href=\"editt.php?id=$row[id]\">Edit</a> </td>";
           echo "<td><a href=\"tdelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";    
           echo "</tr>";
       }
       ?>

   </table>
    </div>

    <footer class="container-fluid text-center">
            <a href="vision.html" title="To Top">
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Copyright @2019-2020 Asian Institute of Computer Studies. All Rights Reserved</p>
          </footer>
</body>
</html>