<?php

session_start();


$connect = mysqli_connect('localhost', 'root', '', 'Welcome');# host, user, password, database


$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$select_query = "SELECT * FROM users WHERE username= '$username' ";

$result = mysqli_query($connect, $select_query);

$number = mysqli_num_rows($result);

if($number > 0){
	echo "Username already exists";
}else {
	$new_register = "INSERT INTO users(name, username, password)
	                VALUES ('$name', '$username', '$password')";
	mysqli_query($connect, $new_register);
	echo "Registration Successful";
}


?>
<style>
body {
	text-align: center;
	background-color: #99ffd6;
}
a {
	text-decoration: none;
  	background-color: #f4511e;
  	border: none;
 	color: white;
  	padding: 15px 32px;
  	text-align: center;
 	text-decoration: none;
  	display: inline-block;
 	font-size: 16px;
  	margin: 4px 2px;
  	cursor: pointer;
  	border-radius: 8px;
}
a:hover {
  background-color:  #ff6600;
}
</style>
<br><br><a href="startpage.html">Home</a>