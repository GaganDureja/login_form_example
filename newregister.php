<?php

session_start();


$connect = mysqli_connect('localhost', 'root', 'Password@123', 'Welcome');


$name = $_post['name'];
$username = $_post['username'];
$password = $_post['password'];

$select_query = "select * from userdata where username = '$username' ";

$result = mysqli_query($connect, $select_query);

$number = mysqli_num_rows($result);

if($number == 1){
	echo "username already exists";
}else {
	$new_register = "insert into userdata(name, username, password)
	values ('$name', '$user', '$pass')";
	mysqli_query($connect, $new_register);
	echo "Registration Successful";
}


?>