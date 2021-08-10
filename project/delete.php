<?php 
	include '../connection/connection.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$query = "DELETE FROM person WHERE id = $id";
		$result = mysqli_query($connection,$query);
		if(!$result){
			die('Query Failed');
		}
		echo $result;

	}
?>