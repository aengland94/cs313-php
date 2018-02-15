<?php 
   session_start();
   //session_unset();
   

?>
<!DOCTYPE html>
<!-- Login page for Chatterbox -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
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
          <form action="<?php echo htmlspecialchars('validateLogin.php'); ?>" method="POST" class="container"> 
             <div class="row">
                <h3 class="col-md-4">Username:</h3>
                <input type="text" name="username" class="col-md-4" maxlength="30">
             </div>
             <div class="row">
                <h3 class="col-md-4">Password:</h3>
                <input type="password" name="password" class="col-md-4" maxlength="30">
             </div>
             <div class="row">
                <button class="col-md-4"><a href="newAccount.php">Create Account</a></button>
                <input type="submit" name="submit" value="Login" class="col-md-4">
              </div>
          </form>
      </div>
   </body>
</html>