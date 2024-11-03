<?php
session_start();

include_once('connection.php');


if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];


    $sql = "UPDATE members SET firstname='$firstname', lastname ='$lastname', address = '$address' WHERE id ='$id'";
	
    if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
	}else{
        $_SESSION['error'] ="Something went wrong, check again!";
    }
}else {
    $_SESSION['error']= "Select member to edit first";
}

header('location: index.php');


?>