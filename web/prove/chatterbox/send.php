<?php 
   session_start();
   require "db.php";

   if (!isset($_SESSION['user_id']))
      header('Location: login.php');

   insertMessage($_POST['message_text']);

   header('Location: profile.php');
?>