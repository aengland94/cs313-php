<?php 
   session_start();

   // connect to db
   require "db.php";

   $isValid = true;

   if (checkPassword($_POST['username'], $_POST['password']))
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
      setUser($_POST['username']);
      header("Location: profile.php");
   }
   else
   {
      header("Location: newAccount.php");
   }
?>