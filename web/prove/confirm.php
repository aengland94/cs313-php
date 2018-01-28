<?php 
   session_start();

   $filter = $_SESSION['cart'];
   $prices = $_SESSION['prices'];
   $items  = $_SESSION['all'];
   $total  = 0;
?>
<!DOCTYPE html>
<!-- Confirm page for Prove for week 03 -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Confirm</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   	    <link rel="stylesheet" type="text/css" href="../css/basic.css"/>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="body">
          <div class="container">
            <div class="row">
              <h1 class="col-md-12">Your order has been placed</h1> 
            </div>
            <div class="row">
              <h2 class="col-md-6">Items to be purchase: </h2>
            </div>
            <!-- Disply items -->
            <?php
                foreach ( $filter as $key => $value) {
                  if($value > 0){
                    $total += ($prices[$key] * $value);
                    echo '<div class="row"><img src="../img/shop-o-lot/items/'; 
                    echo $key . '.jpg" alt="' . $value . '" class="col-md-4">';
                    echo '<div class="col-md-6"><h2>Item: ' . $items[$key] . '</h2>';
                    echo '<h3>Cost per item: $' . $prices[$key] . '</h3><h3>';
                    echo 'Quantity: ' . $value . '</div></div>';
                  }
                } 
              ?>
            <div class="row">
              <h2 class="col-md-6">Shipping Address: </h2>
            </div>
            <!-- Address -->
            <?php 
              if(isset($_POST['street1'])){
                 echo '<div class="row"><h3 class="col-md-6">' . $_POST['street1'] . '</h3></div>'; 
                }
              if(isset($_POST['street2'])){
                 echo '<div class="row"><h3 class="col-md-6">' . $_POST['street2'] . '</h3></div>'; 
                }
              if(isset($_POST['city']) && isset($_POST['state'])){
                 echo '<div class="row"><h3 class="col-md-6">' . $_POST['city'] .  ', '. $_POST['state'] . '</h3></div>'; 
                }
              if(isset($_POST['country']) && isset($_POST['zip'])){
                 echo '<div class="row"><h3 class="col-md-6">' . $_POST['country'] .  ' '. $_POST['zip'] . '</h3></div>'; 
                }
            ?>
            <div class="row">
              <a href="browse.php" class="col-md-6">return to shopping</a>
            </div>
          </div>
      </div>
   </body>
</html>