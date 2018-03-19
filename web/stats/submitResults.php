<?php 
   session_start();

   // connect to db
   require "db.php";

   $isValid = false;

   if (isset($_POST['color']))
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
      trigger_error("Session name: " . $_SESSION['name'],E_USER_WARNING);
      trigger_error("Session color: " . $_SESSION['color'],E_USER_WARNING);
      insertResults($_SESSION['name'], $_POST['color'])  //$_SESSION['name'], $_POST['color'] to db via insertResults($signature, $color)
      header("Location: thank_you.php");
   }
   else
   {
      header("Location: results.php");
   }
?>