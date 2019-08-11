<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<style>
	body{
		text-align: center;
		background-color: #99ffd6;
	}
	input[type=submit] {
		background-color: #f4511e;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
	}
	input[type=submit]:hover {
		background-color:  #ff6600;
	}
</style>
<body>
	<h4>Please fill the following details:</h4>
	<form action="newregister.php" method="post">
<table>
	<tr><td>Name:</td><td><input type="text" name="name" required=""></td></tr>
	<tr><td>Username:</td><td> <input type="text" name="username" required=""></td></tr>
	<tr><td>Password:</td><td> <input type="Password" name="password" required=""></td></tr>
	<tr><td><input type="Submit" name="" value="Register"></td></tr>
    </table>
</form>
</body>
</html>