<?php 
   session_start();

   // connect to db
   require "db.php";

   $isValid = false;

   if (isset($_POST['name']))
   {
      $isValid = true;
      $_SESSION['isValid'] = true;
   }
   else
   {
      $isValid = false;
      $_SESSION['isValid'] = false;
   }

   if ($isValid)
   {
      header("Location: read2start.php");
   }
   else
   {
      header("Location: agreement.php");
   }
?>