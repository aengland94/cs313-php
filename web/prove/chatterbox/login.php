<?php 
   session_start();
   //session_unset();
   if(!isset($_SESSION['isValid']))
     $_SESSION['isValid'] = true;
?>
<!DOCTYPE html>
<!-- Login page for Chatterbox -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link rel="icon" type="image/png" href="img/logoBlack@0.5x.png" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="chatterbox.css"/>
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
      <div class="row header">
         <h1 class="col-md-5">Login</h1>
         <div class="col"></div>
         <img src="img/logoWhite.png" alt="Chatterbox" class="col-md-2">
         <div class="col-md-3">
            <div class="row">
               <h2 class="col-md-12">Chatterbox</h2>
            </div>
         </div>
      </div>
      <form action="<?php echo htmlspecialchars('validateLogin.php'); ?>" method="POST" class="row side"> 
         <div class="row justify-content-around">
            <h3 class="col-md-4">Username:</h3>
            <input type="text" name="username" class="col-md-4" maxlength="30">
         </div>
         <div class="row justify-content-around">
            <h3 class="col-md-4">Password:</h3>
            <input type="password" name="password" class="col-md-4" maxlength="30">
            <?php 
               if(!$_SESSION['isValid'])
                 echo '<h3 class="col-md-6 error">ERROR: Username and/or password is incorrect</h3>'; 
            ?>
         </div>
         <div class="row justify-content-around">
            <a href="newAccount.php" class="col-md-4">Create Account</a>
            <input type="submit" name="submit" value="Login" class="col-md-4">
         </div>
      </form>
   </body>
</html>