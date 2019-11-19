<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['add'])) {	
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $contact = $_POST['Contact'];   
    $place = $_POST['place'];
		

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
		 
			
			
		$sql = "INSERT INTO aics.registrants (firstname, lastname, middlename, age, gender, birthdate, Contact, place) VALUES(:firstname, :lastname, :middlename, :age, :gender, :birthdate, :Contact, :place)";
		$query = $conn->prepare($sql);
				
        $query -> bindparam(':firstname', $firstname);
        $query -> bindparam(':lastname', $lastname);
        $query -> bindparam(':middlename', $middlename);
        $query -> bindparam(':age', $age);
        $query -> bindparam(':gender', $gender);
        $query -> bindparam(':birthdate', $birthdate);
        $query -> bindparam(':Contact', $contact);
        $query -> bindparam(':place', $place);
        $query -> execute();
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>