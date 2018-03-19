<?php 
   session_start();

   if(!isset($_SESSION['name'])) header("Location: agreement.php");
?>

<!DOCTYPE html>
<!-- Results page for STATS -->
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Results</title>
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
         <h1 class="col-md-12">Which drink was sweeter?</h1>
      </div>
      <form action="submitResults.php" method="POST" class="row">
         <select name="color" class="col-md-4">
            <option>Red</option>
            <option>Clear</option>
         </select>
         <input type="submit" name="submit" value="Submit" class="col-md-3">
      </form>
   </body>
</html>