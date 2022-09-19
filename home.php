<?php 
  session_start(); // if ap ka agr session set nh ha to pahly home pe nh ajaega agr ap ka session set ha to aaega home pe
  if (!isset($_SESSION['user'])) {
    header("Location:login.php");
  }
  echo "Wellcome To Home Page: ".$_SESSION['user']['name']."";
  ?>
   <a href="logout.php">Logout</a>
  <?php    
?>
