<?php

include_once("config.php");
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $middlename = $_POST['MiddleName'];
    $age = $_POST['Age'];
    $gender = $_POST['Gender'];
    $birthdate = $_POST['Birthdate'];
    $contact = $_POST['Contact'];
    $place = $_POST['Place'];
	
	
	if(empty($firstname) || empty($lastname) || empty($middlename) || empty($age) || empty($gender) || empty($birthdate) || empty($contact) || empty($place)) {
			
		if(empty($firstname)) {
			echo "<font color='red'>Firstname field is empty.</font><br/>";
		}
		
		if(empty($lastname)) {
			echo "<font color='red'>Lastname field is empty.</font><br/>";
		}
		
		if(empty($middlename)) {
			echo "<font color='red'>Middlename field is empty.</font><br/>";
		}
		
        if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
        }
        
        if(empty($birthdate)) {
			echo "<font color='red'>Birthdate field is empty.</font><br/>";
        }
        
        if(empty($contact)) {
			echo "<font color='red'>Contact field is empty.</font><br/>";
        }
        
        if(empty($place)) {
			echo "<font color='red'>Place field is empty.</font><br/>";
		}
        
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	} else {	
		
		$sql = "UPDATE aics.registrants SET FirstName=:firstname, LastName=:lastname, MiddleName=:middlename, Age=:age, Gender=:gender, Birthdate=:birthdate, contact=:Contact, Place=:place WHERE id=:id";
        $query = $conn->prepare($sql);
        
        $query ->bindparam(':id', $id);
        $query -> bindparam(':firstname', $firstname);
        $query -> bindparam(':lastname', $lastname);
        $query -> bindparam(':middlename', $middlename);
        $query -> bindparam(':age', $age);
        $query -> bindparam(':gender', $gender);
        $query -> bindparam(':birthdate', $birthdate);
        $query -> bindparam(':Contact', $contact);
        $query -> bindparam(':place', $place);
        $query -> execute();
		
		header("Location: index.php");
	}
}
?>
<?php

$id = (isset($_GET['id']) ? $_GET['id'] : '');

$sql = "SELECT * FROM aics.registrants WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$firstname = $row['FirstName'];
    $lastname = $row['LastName'];
    $middlename = $row['MiddleName'];
    $age = $row['Age'];
    $gender = $row['Gender'];
    $birthdate = $row['Birthdate'];
    $contact = $row['Contact'];
    $place = $row['Place'];
}
?>
<html>
<head>	
	<title>Edit Table</title>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

body{
  background-position: center;
  background-size: cover;
  background-image: url("sunset.jpg");
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
input[type=text] {
  width: 150%;
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
button{
  width: 100%;
  background-color: #f0071e;
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

button:hover{
  background-color: #ffe6e6;
}
</style>
<body>
	
	<br/><br/>
	<div class="container">
	<form name="form1" method="post" action="edit.php">
		<table >
			<tr> 
				<td>First Name:</td>
				<td><input type="text" name="FirstName" required  value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name:</td>
				<td><input type="text" name="LastName" required value="<?php echo $lastname;?>"></td>
			</tr>
			<tr> 
				<td>Middle Name:</td>
				<td><input type="text" name="MiddleName" required value="<?php echo $middlename;?>"></td>
			</tr>
			<tr>

                <td>Age:</td>
				<td><input type="text" name="Age" required value="<?php echo $age;?>"></td>
			</tr>
			<tr>

                <td>Gender:</td>
				<td><input type="text" name="Gender" required value="<?php echo $gender;?>"></td>
			</tr>
			<tr>

                <td>Birthdate</td>
				<td><input type="text" name="Birthdate" required value="<?php echo $birthdate;?>"></td>
			</tr>
			<tr>

             <td>Contact No.</td>
				<td><input type="text" name="Contact" required value="<?php echo $contact;?>"></td>
			</tr>
			<tr>

                <td>Place he/she currently living:</td>
				<td><input type="text" name="Place" required value="<?php echo $place;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
				<td><button class="w3-button w3-green w3-section w3-padding" type="submit" ><a href="index.php"> <style></style>Cancel</a></button></td>

</div>
			</tr>
		</table>
	</form>
</body>
</html>