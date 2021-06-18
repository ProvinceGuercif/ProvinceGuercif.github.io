<?php
   session_start();
   unset($_SESSION["login"]);
   unset($_SESSION["password"]);
   
  
   header('Refresh: 1; URL = connecter.php');
?>