<?php
   session_start();
   require "db.php";
   insertContact($_POST['contact']);

   header("Location: profile.php");
?>