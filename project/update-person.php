<?php 
	include ',,/connection/connection.php';
	$id = $_POST['id'];
	$name = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$age = $_POST['age'];
	$genre = $_POST['genre'];
	$sql = "UPDATE person SET name = '$name', last_name = '$lastname', age = '$age', genre = '$genre' WHERE id = '$id' ";
	$result = mysqli_query($connection,$sql);
	if(!$resul){
		die('Query failed');
	}
	echo "Success";


?>