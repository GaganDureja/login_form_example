<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style>
	body{
		text-align: center;
		background-color: #99ffd6;
	}
	input[type=submit], a {
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
	a:hover, input[type=submit]:hover {
		background-color:  #ff6600;
	}
	
</style>
<body>
	<h3>Please enter your details:</h3>
	<form action="validate.php" method="post" >
		<table>
	       <tr><td>Username:</td><td> <input type="text" name="username" id="username" value="" ></td></tr>
	       <tr><td>Password:</td><td> <input type="Password" name="password" id="password" ></td></tr>
	       <tr><td><input type="Submit" name="" value="Login"></td></tr>
        </table>
    </form>
    <a href="/Gagan_script/login_form_example-master/register.php">Register</a>
</body>
</html>