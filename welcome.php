<?php
session_start();
if(!isset($_SESSION["username"])){
	header("location:startpage.html");
}
?>
<!DOCTYPE html>
<html>
<head></head>
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
<body>


<h1 style="margin-top: 200px;">Welcome <?php echo $_SESSION["username"]; ?></h1>


<a href="logout.php">Logout</a>

</body>
</html>
