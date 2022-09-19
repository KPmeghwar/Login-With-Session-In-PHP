<?php 
  session_start();
  echo "Wellcome To Home Page: ".$_SESSION['user']['name']."";
  ?>
   <a href="logout.php">Logout</a>
  <?php
?>
