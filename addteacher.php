<html>
<head>
	<title>Add Data</title>
</head>
<style>

body{
     background-image: url("registration.jpg");
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
 
}
.text{
    font-size:30px;
    font-family:'Dancing Script', cursive;
    text-align:center;
    margin-top:150px;
    color:#a832a2;
    
}
p{
    font-size:25px;
    font-family:'Dancing Script', cursive;
    text-align:center;
    
    color:#a832a2;

}
button{
  margin-left:50%;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<body>
<div class="text">
<h1>Teacher added Successfully!!!</h1>
</div>

<button class=" btn btn-success" value="LOGIN"><a href="tindex.php">Go back</a></button>
</body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['addt'])) {	
	$firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gend'];
    $status = $_POST['stat'];
    
		

	if(empty($firstname) || empty($middlename) || empty($lastname) || empty($gender) || empty($status)) {
				
		if(empty($firstname)) {
			echo "<font color='red'>Firstname field is empty.</font><br/>";
		}
		
		if(empty($middlename)) {
			echo "<font color='red'>Middlename field is empty.</font><br/>";
		}
		
		if(empty($lastname)) {
			echo "<font color='red'>Lastname field is empty.</font><br/>";
		}
		
        if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
        }

        if(empty($status)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
              
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		 
			
			
		$sql = "INSERT INTO aics.teachers (FirstName, MiddleName, LastName, Gender, Status) VALUES(:firstname, :middlename, :lastname, :gend, :stat)";
		$query = $conn->prepare($sql);
				
        $query -> bindparam(':firstname', $firstname);
        $query -> bindparam(':middlename', $middlename);
        $query -> bindparam(':lastname', $lastname);
        $query -> bindparam(':gend', $gender);
        $query -> bindparam(':stat', $status);
        $query -> execute();
		
		echo "<font color='green'>Teacher added successfully.";
		echo "<br/><a href='tindex.php'>View Result</a>";
	}
}
?>
</body>
</html>