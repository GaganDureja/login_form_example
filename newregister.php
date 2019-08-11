<?php

session_start();


$connect = mysqli_connect('localhost', 'root', 'Password@123', 'Welcome');


$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$select_query = "SELECT * FROM userdata WHERE username= '$username' ";

$result = mysqli_query($connect, $select_query);

$number = mysqli_num_rows($result);

if($number > 0){
	echo "Username already exists";
}else {
	$new_register = "INSERT INTO userdata(name, username, password)
	                VALUES ('$name', '$username', '$password')";
	mysqli_query($connect, $new_register);
	echo "Registration Successful";
}


?>