<?php

session_start();


$connect = mysqli_connect('localhost', 'root', '', 'Welcome');


$username = $_POST['username'];
$password = $_POST['password'];

$select_query = "SELECT * FROM users WHERE username = '$username' && password = '$password'" ;

$result = mysqli_query($connect, $select_query);

$number = mysqli_num_rows($result);

if ($number == 1) {
	$_SESSION['username'] = $username;
	header('location:welcome.php');
}else{
	header('location:login.php');
}


?>