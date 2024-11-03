<?php
	//for MySQLi OOP
	$conn = new mysqli('127.0.0.1:3307', 'root', '', 'roikursi');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'roikursi');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>