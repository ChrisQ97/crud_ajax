<?php 
	include '../connection/connection.php';
	$name=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	
	$age=$_POST['age'];
	$genre=$_POST['genre'];
	$sql = "INSERT INTO person(name,last_name,age,genre) VALUES ('$name','$lastname','$age','$genre')";
	echo mysqli_query($connection,$sql);

?>