<?php
require_once("includes/connection.php");
session_start();
if(isset($_POST['sub']))
{

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM user WHERE email='".$email."' AND password='".$password."'"; 
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0) {
	$row= mysqli_fetch_assoc($result);
	$_SESSION['user']=$row;
     if ($row) {
     	header("Location:home.php");
     }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>..::Login::..</title>
</head>
<body bgcolor="skyblue">
	<h1 style="text-align:center;color: red">Employee Login</h1>
	<hr>
<form method="POST">
	<table align="center" border="2">
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email"></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="sub" value="Login"></td>
		</tr>

	</table >
</form>
<center>
        <a href="register.php">Register User</a>
</center>

</body>
</html>