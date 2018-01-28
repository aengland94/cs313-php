<?php 
   session_start();
   $filter = $_SESSION['cart'];
   $prices = $_SESSION['prices'];
   $items  = $_SESSION['all'];
   $total  = 0;
?>
<!DOCTYPE html>
<!-- Cart page for Prove for week 03 -->

<html>
   <head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cart</title>
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
      <div class="body">
          <div class="container"> 
            <h2>Your Cart</h2>
            <!-- Disply items -->
            <?php
                foreach ( $filter as $key => $value) {
                  if($value > 0){
                    $total += ($prices[$key] * $value);
                    echo '<div class="row"><img src="../img/shop-o-lot/items/'; 
                    echo $key . '.jpg" alt="' . $value . '" class="col-md-4">';
                    echo '<div class="col-md-6"><h2>Item: ' . $items[$key] . '</h2>';
                    echo '<h3>Cost per item: $' . $prices[$key] . '</h3><h3>';
                    echo 'Quantity: ' . $value . '</h3><button onclick="setKey(\'';
                    echo $key . '\')">Remove from cart</button></div></div>';
                  }
                } 
              ?>
              <div class="row">
                <h2 class="col-md-4">Your total cost is $<?php echo $total; ?></h2>
              </div>
              <div class="row">
                <a href="browse.php" class="col-md-6">return to shopping</a>
                <a href="checkout.php" class="col-md-6">Checkout</a>
              </div>
          </div>
      </div>
   </body>
</html>