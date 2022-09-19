<?php

$conn=mysqli_connect("localhost","root","","testdb");
if(mysqli_connect_errno())
{
echo"Database Connection Failed";
echo"Error No:".mysqli_connect_err()."<br>";
echo"Error Message:".mysqli_connect_error();
}

?>