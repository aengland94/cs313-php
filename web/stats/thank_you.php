<?php 
   session_start();

   session_unset();

   session_destroy();
?>

<!DOCTYPE html>
<!-- Results page for STATS -->
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Thank You</title>
      <link rel="icon" type="image/png" href="img/logoBlack@0.5x.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <!-- JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!-- Bootstrap Javascript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
   </head>
   <body class="container">
      <div class="row header">
         <h1 class="col-md-12">Thank You for being part of our study!</h1>
      </div>
      <form action="agreement.php" method="POST" class="row">
         <input type="submit" name="submit" value="Next Person" class="col-md-3">
      </form>
   </body>
</html>