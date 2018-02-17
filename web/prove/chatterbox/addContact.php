<?php 
   session_start();
   require "db.php";
?>

<!DOCTYPE html>
<!-- Profile page for Chatterbox -->
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Add A Contact</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../../css/basic.css"/>
      <link rel="stylesheet" type="text/css" href="chatterbox.css"/>
      <!-- JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!-- Bootstrap Javascript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
      <script type="text/javascript">
         function addContact(newContact){
            $.post("userToContact.php", {contact: newContact}, function(){
               location.reload(true);
            });
         }
      </script>
   </head>
   <body>
      <div class="body container">
         <div class="row">
            <h1 class="col-md-6"></h1>
         </div>
         <?php 
            foreach (getUsers() as $row)
            {
               echo '<div class="row"><button class="col-md-4" onclick="addContact(' . $row['id'] . ')">' . $row['display_name'] . '</button></div>';
            }
         ?>
      </div>
   </body>
</html>