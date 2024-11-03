<?php
	//for MySQLi OOP
	$conn = new mysqli('', 'root', '', '');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', '');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>
