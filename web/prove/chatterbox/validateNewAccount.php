<?php 
   session_start();

   // connect to db
   require "db.php";
   $db = getDB();

   $isValid = true;

   //check that all field are filled
   if(!isset($_POST['display_name'])   ||
      !isset($_POST['username'])       ||
      !isset($_POST['password1'])      ||
      !isset($_POST['password2']))
   {
      $_SESSION['isFull'] = false;
      $isValid = false;
   }
   else
   {
      $_SESSION['isFull'] = true;
   }

   //check if username is taken
   if (checkUsername($_POST['username']))
   {
      $_SESSION['isUsernameFree'] = false;
      $isValid = false;
   }
   else
   {
      $_SESSION['isUsernameFree'] = true;
   }

   //check for matching passwords
   if ($_POST['password1'] != $_POST['password2'])
   {
      $_SESSION['isPassMatch'] = false;
      $isValid = false;
   }
   else
   {
      $_SESSION['isPassMatch'] = true;
   }

   //chooses where to go next
   //check for matching passwords
   if ($isValid)
   {
      insertUser($_POST['username'], $_POST['password1'], $_POST['display_name']);
      setUser($_POST['username']);
      header("Location: profile.php");
   }
   else
   {
      header("Location: newAccount.php");
   }
?>