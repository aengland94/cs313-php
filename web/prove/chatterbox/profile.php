<?php 
   require "db.php";
   //session_unset();
   // if(!isset($_SESSION['username'])){
   //    $_SESSION['username'] = 'aengland94';

   //connect to database
   connectToDB();
   //$stmt = $dp->prepare('SELECT * FROM public.users WHERE username=:username');
   //$stmt->execute(array(':username' => $_SESSION['username']););
   //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!-- Profile page for Chatterbox -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Page</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   	    <link rel="stylesheet" type="text/css" href="../../css/basic.css"/>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script>
          
        </script>
   </head>
   <body>
      <div class="body">
         <h1>test</h1>
         <div class="container"> 
            <div class="row">
               <?php 
                  $statement = $currentDB->prepare("SELECT username FROM public.users");
                  $statement->execute();

                  while($row = $statement->fetch(PDO::FETCH_ASSOC))
                  {
                     echo '<p class="col-md-4">' . $row['username'] . '</p>';
                  }
               
               ?> 
            </div>
         </div>
      </div>
   </body>
</html>