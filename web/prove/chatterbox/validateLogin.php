<?php 
   session_start();

   // connect to db
   require "db.php";
   $db = getDB();

   $isValid = true;

   if ($isValid)
   {
      header("Location: profile.php");
   }
   else
   {
      header("Location: newAccount.php");
   }
?>