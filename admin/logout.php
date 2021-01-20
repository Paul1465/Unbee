<?php
   session_start();
   session_unset($_SESSION['admin']);
   session_destroy();

   header('location:../login.php');
?>