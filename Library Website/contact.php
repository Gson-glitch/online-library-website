<?php

$con = mysqli_connect('localhost', 'root', '','my_db');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `contact_table` (`id`, `firstName`, `lastName`, `email`, `phone`, `message`) VALUES ('0', '$firstname', '$lastname', '$email', '$phonenumber', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
	echo "<script> window.location.assign('index.html'); </script>";
}

?>