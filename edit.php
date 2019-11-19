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

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name:</td>
				<td><input type="text" name="FirstName" value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name:</td>
				<td><input type="text" name="LastName" value="<?php echo $lastname;?>"></td>
			</tr>
			<tr> 
				<td>Middle Name:</td>
				<td><input type="text" name="MiddleName" value="<?php echo $middlename;?>"></td>
			</tr>
			<tr>

                <td>Age:</td>
				<td><input type="text" name="Age" value="<?php echo $age;?>"></td>
			</tr>
			<tr>

                <td>Gender:</td>
				<td><input type="text" name="Gender" value="<?php echo $gender;?>"></td>
			</tr>
			<tr>

                <td>Birthdate</td>
				<td><input type="text" name="Birthdate" value="<?php echo $birthdate;?>"></td>
			</tr>
			<tr>

             <td>Contact No.</td>
				<td><input type="text" name="Contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr>

                <td>Place he/she currently living:</td>
				<td><input type="text" name="Place" value="<?php echo $place;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>