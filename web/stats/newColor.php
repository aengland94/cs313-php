<?php 
   session_start();

   if($_SESSION['color'] > 50) $_SESSION['color'] = 25;
   else $_SESSION['color'] = 75;

   $_SESSION['count'] = 2;
?>