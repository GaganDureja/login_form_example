<?php

session_start();


$connect = mysqli_connect('localhost', 'root', 'Password@123', 'Welcome');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Success";
}

$username = $_post['username'];
$password = $_post['password'];

$select_query = "select * from userdata where username = '$username' && password = '$password'" ;

$result = mysqli_query($connect, $select_query);

$number = mysqli_num_rows($result);

if ($number == 1) {
	header('location:welcome.php');
}else{
	header('location:login.php');
}


?>