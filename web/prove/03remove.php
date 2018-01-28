<?php 
   session_start();
   if(isset($_SESSION[cart][$_POST['name']])){
   	  if($_SESSION[cart][$_POST['name']] > 1)
   	  	$_SESSION[cart][$_POST['name']] -= 1;
   	  else
   	  	$_SESSION[cart][$_POST['name']] = 0;
   } 
?>