<?php

include_once("config.php");

if(isset($_POST['tupdate']))
{	
	  $id = $_POST['id'];
    $firstname = $_POST['FirstName'];
    $middlename = $_POST['MiddleName'];
    $lastname = $_POST['LastName'];
    $gender = $_POST['Gender'];
    $status = $_POST['Status'];

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
		
		$sql = "UPDATE aics.teachers SET FirstName=:firstname, MiddleName=:middlename, LastName=:lastname, Gender=:gend, Status=:stat WHERE id=:id";
        $query = $conn->prepare($sql);
        
        $query ->bindparam(':id', $id);
        $query -> bindparam(':firstname', $firstname);
        $query -> bindparam(':middlename', $middlename);
        $query -> bindparam(':lastname', $lastname);
        $query -> bindparam(':gend', $gender);
        $query -> bindparam(':stat', $status);
        $query -> execute();
		
		header("Location: tindex.php");
	}
}
?>
<?php

$id = (isset($_GET['id']) ? $_GET['id'] : '');

$sql = "SELECT * FROM aics.teachers WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
  $firstname = $row ['FirstName'];
  $middlename = $row ['MiddleName'];
  $lastname = $row ['LastName'];
  $gender = $row ['Gender'];
  $status = $row ['Status'];
}
?>
<html>
<head>	
	<title>Edit Teacher's Table</title>
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
	<form name="form1" method="post" action="editt.php">
		<table>
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="FirstName" required value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>Middle Name</td>
				<td><input type="text" name="MiddleName" required value="<?php echo $middlename;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="LastName" value="<?php echo $lastname;?>"></td>
			</tr>
			<tr>

                <td>Gender</td>
				<td><input type="text" name="Gender" value="<?php echo $gender;?>"></td>
			</tr>
			<tr>

                <td>Status</td>
				<td><input type="text" name="Status" value="<?php echo $status;?>"></td>
			</tr>
			<tr>

				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
        <td><input type="submit" name="tupdate" value="Update"></td>
        <td><button class="w3-button w3-green w3-section w3-padding" type="submit" ><a href="tindex.php"> <style></style>Cancel</a></button></td>
</div>
			</tr>
		</table>
	</form>
</body>
</html>