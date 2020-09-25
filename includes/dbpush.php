<?php
	include_once 'dbcon.php';
	
	$jok = $_POST['jok'];

	$sql = "INSERT INTO jokees (jokes) VALUES ('$jok');";
	mysqli_query($conn, $sql);
	
	
	header("Location: ../index.php?upload=success");
?>