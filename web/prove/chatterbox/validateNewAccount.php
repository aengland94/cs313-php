<?php 
   session_start();

   $isValid = true;

   //check that all field are filled
   /*if(!isset($_POST['display'])   ||
      !isset($_POST['username'])  ||
      !isset($_POST['password1']) ||
      !isset($_POST['password2']))
   {
      $_SESSION['isFull'] = false;
      $isValid = false;
   }
   else
   {
      $_SESSION['isFull'] = true;
   }*/

   //check for matching passwords
   if ($_POST['password1'] != $_POST['password2'])
   {
      echo "<script>alert('" . $_POST['password1'] . " != " . $_POST['password2'] . "');</script>";
      $_SESSION['isPassMatch'] = false;
      $isValid = false;
   }
   else
   {
      echo "<script>alert('" . $_POST['password1'] . " = " . $_POST['password2'] . "');</script>";
      $_SESSION['isPassMatch'] = true;
   }

   //chooses where to go next
   //check for matching passwords
   if ($isValid)
   {
      header("Location: profile.php");
   }
   else
   {
      header("Location: newAccount.php");
   }
?>