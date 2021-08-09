<?php 
	
	include '../connection/connection.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM person WHERE id={$id}";
	$result = mysqli_query($connection,$sql);
	if(!$result){
		die('Query failed');
	}
	$json = array();

	while ($row = mysqli_fetch_array($result)){
		$json[] = array(
			'id' => $row['id'],
			'name' => $row['name'],
			'last_name' => $row['last_name'],
			'age' => $row['age'],
			'genre' => $row['genre']
		);
	}
	$jsonstring = json_encode($json[0]);
	echo $jsonstring;
	

	
?>