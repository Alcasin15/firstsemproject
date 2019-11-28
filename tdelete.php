<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM aics.teachers WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

header("Location:tindex.php");
?>