<?php 
   session_start();

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