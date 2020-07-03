<?php

session_start();


$connect = mysqli_connect('localhost', 'root', '', 'Welcome');


$username = $_POST['username'];
$username = mysqli_real_escape_string($connect, $username); #for sql injection prention
$password = $_POST['password'];
$password = mysqli_real_escape_string($connect, $password);

$select_query = "SELECT * FROM users WHERE username = '$username' && password = '$password' " ;

$result = mysqli_query($connect, $select_query);

$number = mysqli_num_rows($result);



if ($number == 1) {
	$_SESSION['name'] = $name;
	$_SESSION['username'] = $username;
	header('location:welcome.php');
}else{
	echo "Wrong username or password";
	
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
<br><br><a href="login.html">Home</a>

