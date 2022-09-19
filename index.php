<?php
require_once("includes/connection.php");
      if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $password=$_POST['password'];

      $query="INSERT INTO user(name,email,password) values('".$name."','".$email."','".$password."')"; 
      $result=mysqli_query($conn,$query);
      if($result)
      {
          echo"<h4>Record insert Successfully!......</h4>";
      }
      else"Record not insert";
     }
?>
<!DOCTYPE html>
<html>
<head>
	<title>..::Register::..</title>
<style type="text/css">
	h4{
		color: green;
		text-align: center;
	}
</style>
</head>
<body bgcolor="skyblue">
     <h1 style="text-align:center;color: red">Employees Register</h1>
     <hr>
     <form method="POST" action="">
     	<table border="2" align="center">
     		<tr>
     			<td>Name:</td>
     			<td><input type="text" name="name"></td>
     		</tr>
               <tr>
     			<td>Email:</td>
     			<td><input type="email" name="email" required></td>
     		</tr>

     		<tr>
     			<td>Password:</td>
     			<td><input type="password" name="password"></td>
     		</tr>

     		
     		<tr>
     			<td colspan="5" align="center"><input type="submit" name="submit" value="Register"></td>
     		</tr>
     	</table>
     </form>
               <center>
               <a href="login.php">Login User</a>
               </center>
     
</body>
</html>