<?php 
   session_start();
   $filter = $_SESSION['cart'];
   $prices = $_SESSION['prices'];
   $items  = $_SESSION['all'];
   $total  = 0;
?>
<!DOCTYPE html>
<!-- Checkout page for Prove for week 03 -->

<html>
   <head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Checkout</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/basic.css"/>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script type="text/javascript">
          function setKey(newKey){
            $.post("03remove.php", {name: newKey}, function(){ 
                location.reload(true);
            });
          }
        </script>
   </head>
   <body>
      <?php require "03header.php"; ?>
      <div class="body">
          <form action="<?php echo htmlspecialchars('confirm.php'); ?>" class="container" method="post">
              <div class="row">
                <h3 class="col-md-4">Street 1: </h3>
                <input type="text" name="street1" class="col-md-4" maxlength="30">
              </div> 
              <div class="row">
                <h3 class="col-md-4">Street 2: </h3>
                <input type="text" name="street2" class="col-md-4" maxlength="30">
              </div>
              <div class="row">
                <h3 class="col-md-4">City: </h3>
                <input type="text" name="city" class="col-md-4" maxlength="20">
                <h3 class="col-md-4">State: </h3>
                <input type="text" name="state" class="col-md-4" maxlength="2">
              </div>
              <div class="row">
                <h3 class="col-md-4">Country: </h3>
                <input type="text" name="country" class="col-md-4" maxlength="20">
                <h3 class="col-md-4">Zip Code: </h3>
                <input type="text" name="zip" class="col-md-4" maxlength="5">
              </div>
              <div class="row">
                <a href="cart.php" class="col-md-4">Return to Cart</a>
                <input type="submit" name="submit" class="col-md-4">
              </div>
          </form>
      </div>
   </body>
</html>