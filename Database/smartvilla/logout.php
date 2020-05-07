<?php
session_start();
  if(isset($_SESSION['uname']))
  {
      session_destroy();
      echo "<script>alert('You have been LOGOUT');</script>";
      echo "<script>window.location='login.php';</script>";
  }
?>
