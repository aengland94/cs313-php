<?php 
   session_start();

   if(!isset($_SESSION['name'])) header("Location: agreement.php");

   if(!isset($_SESSION['color'])) 
   {
      $_SESSION['count'] = 1;
      $_SESSION['color'] = mt_rand(1,100);
   }
   $color;

   if($_SESSION['color'] > 50) $color = 'red';
   else $color = 'clear';
?>

<!DOCTYPE html>
<!-- Complete Study page for STATS -->
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Complete Study</title>
      <link rel="icon" type="image/png" href="img/logoBlack@0.5x.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <!-- JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!-- Bootstrap Javascript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
      <script>
         function newColor(){
            $.post("newColor.php", { }, function(){ 
                location.reload(true);
            });
         }
      </script>
   </head>
   <body class="container">
      <div class="row header">
         <h1 class="col-md-12">Taste the <?php echo $color; ?> drink.</h1>
      </div>
      
      <?php 
         if($_SESSION['count'] == 1) 
         {
            echo '<div class="row">';
            echo '<button class="col-md-3" onClick="newColor()">Next</button>';
            echo '</div>';
         }
         else
         {
            echo '<form action="results.php" meathod="POST" class="row">';
            echo '<input type="submit" name="submit" value="Next" class="col-md-3">';
            echo '</form>';
         }
      ?>
   </body>
</html>