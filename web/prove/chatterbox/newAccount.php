<?php 
   session_start();
   //session_unset();
   
   if(!isset($_SESSION['isUsernameFree']))
      $_SESSION['isUsernameFree'] = true;
   if(!isset($_SESSION['isFull']))
      $_SESSION['isFull'] = true;
   if(!isset($_SESSION['isPassMatch']))
      $_SESSION['isPassMatch'] = true;

?>
<!DOCTYPE html>
<!-- Login page for Chatterbox -->
<html>
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>New Account</title>
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
          <form action="<?php echo htmlspecialchars('validateNewAccount.php'); ?>" method="POST" class="container"> 
             <div class="row">
                <h3 class="col-md-4">Display Name:</h3>
                <input type="text" name="display_name" class="col-md-4" maxlength="30">
             </div>
             <div class="row">
                <h3 class="col-md-4">Username:</h3>
                <input type="text" name="username" class="col-md-4" maxlength="30">
                <?php 
                   if(!$_SESSION['isUsernameFree'])
                     echo '<h3 class="col-md-4 error">ERROR: Username already exists</h3>'; 
                ?>
             </div>
             <div class="row">
                <h3 class="col-md-4">Password:</h3>
                <input type="password" name="password1" class="col-md-4" maxlength="30">
             </div>
             <div class="row">
                <h3 class="col-md-4">Password (again):</h3>
                <input type="password" name="password2" class="col-md-4" maxlength="30">
                <?php 
                   if(!$_SESSION['isPassMatch'])
                     echo '<h3 class="col-md-4 error">ERROR: Passwords must match</h3>'; 
                ?>
             </div>
             <div class="row">
                <button class="col-md-4"><a href="login.php">Already have an account?</a></button>
                <input type="submit" name="submit" value="Login" class="col-md-4">
                <?php 
                   if(!$_SESSION['isFull'])
                     echo '<h3 class="col-md-4 error">ERROR: All field must be completed</h3>'; 
                ?>
              </div>
          </form>
      </div>
   </body>
</html>