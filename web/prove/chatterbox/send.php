<?php 
   session_start();
   require "db.php";

   insertMessage($_SESSION['contact_id'], $_POST['message_text']);

   header('Location: profile.php');
?>