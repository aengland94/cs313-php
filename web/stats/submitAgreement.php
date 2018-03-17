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
      $_SESSION['name'] = $_POST['name'];
      header("Location: complete_study.php");
   }
   else
   {
      header("Location: agreement.php");
   }
?>