<?php
  if(!(isset($_SESSION['uname'])))
  {
      echo "<script>window.location='login.php';</script>";
  }

?>
