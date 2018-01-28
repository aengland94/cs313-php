<?php 
   session_start();
   //session_unset();
   if(!isset($_SESSION['cart'])){
    $_SESSION['cart']     = array('baseball'   => 0, 
                                  'basketball' => 0, 'cake'     => 0,
                                  'drone'      => 0, 'ipad'     => 0,
                                  'kiak'       => 0, 'nikon'    => 0,
                                  'pinapple'   => 0, 'pizza'    => 0,
                                  'popsickle'  => 0, 'ps4'      => 0,
                                  'reddrink'   => 0, 'sandwich' => 0, 
                                  'soccer'     => 0, 'soup'     => 0,
                                  'tent'       => 0, 'water'    => 0);
        } 
   if(!isset($_SESSION['prices'])){
      $_SESSION['prices'] = array('baseball'   =>  45.00, 
                                  'basketball' =>  15.00, 'cake'     =>  24.00,
                                  'drone'      =>  50.00, 'ipad'     => 300.00,
                                  'kiak'       => 150.00, 'nikon'    => 350.00,
                                  'pinapple'   =>   1.20, 'pizza'    =>  10.00,
                                  'popsickle'  =>   2.25, 'ps4'      => 175.00,
                                  'reddrink'   =>   0.75, 'sandwich' =>   3.98, 
                                  'soccer'     =>   9.50, 'soup'     =>   2.88,
                                  'tent'       =>  36.00, 'water'    =>  23.00);
   }
   if(!isset($_SESSION['all'])){
      $_SESSION['all']    = array('baseball'   => 'Baseball Bat 10 pack', 
                                  'basketball' => 'Nike Indoor/Outdoor Basketball', 
                                  'cake'       => 'Caremel Buttercream Cake',
                                  'drone'      => 'Micro Drone', 
                                  'ipad'       => 'Ipad',
                                  'kiak'       => 'Kiaks Twin pack', 
                                  'nikon'      => 'Nikon RSDL Camera',
                                  'pinapple'   => 'Pinapple', 
                                  'pizza'      => 'Large Pizza',
                                  'popsickle'  => 'YumYum Yogart Pops', 
                                  'ps4'        => 'Playstation 4',
                                  'reddrink'   => 'Raspberry Lemonaid', 
                                  'sandwich'   => 'Build Your Own Sandwich', 
                                  'soccer'     => 'Soccer Ball', 
                                  'soup'       => 'Soup of the Day',
                                  'tent'       => 'Camping Tent 4 man', 
                                  'water'      => 'Sports Water Bottles 10 pack');
   }
   if(!isset($_SESSION['sports'])){
      $_SESSION['sports'] = array('baseball'   => 'Baseball Bat 10 pack', 
                                  'basketball' => 'Nike Indoor/Outdoor Basketball',
                                  'kiak'       => 'Kiaks Twin pack',
                                  'soccer'     => 'Soccer Ball', 
                                  'tent'       => 'Camping Tent 4 man', 
                                  'water'      => 'Sports Water Bottles 10 pack');
   }
   if(!isset($_SESSION['food'])){
      $_SESSION['food']   = array('cake'       => 'Caremel Buttercream Cake',
                                  'pinapple'   => 'Pinapple', 
                                  'pizza'      => 'Large Pizza',
                                  'popsickle'  => 'YumYum Yogart Pops', 
                                  'reddrink'   => 'Raspberry Lemonaid', 
                                  'sandwich'   => 'Build Your Own Sandwich', 
                                  'soup'       => 'Soup of the Day',);
   }
   if(!isset($_SESSION['tech'])){
      $_SESSION['tech']   = array('drone'      => 'Micro Drone', 
                                  'ipad'       => 'Ipad', 
                                  'nikon'      => 'Nikon RSDL Camera', 
                                  'ps4'        => 'Playstation 4');
   }
   if(!isset($_SESSION['filter'])){
      $_SESSION['filter'] = 'all';
   }
   $prices = $_SESSION['prices'];
   $filter    = $_SESSION[$_SESSION['filter']];

?>
<!DOCTYPE html>
<!-- Browse page for Prove for week 03 -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Browse</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   	    <link rel="stylesheet" type="text/css" href="../css/basic.css"/>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script>
          function setKey(newKey){
            $.post("03add.php", {name: newKey});
          }
          
          function setFilter(newFilter){
            $.post("03filter.php", {filter: newFilter}, function(){ 
                location.reload(true);
            });
          }

        </script>
   </head>
   <body>
   	  <?php require "03header.php"; ?>
      <div class="body">
          <div class="container"> 
            
            <!-- Disply items -->
            <div class="row">
              <button class="col-md-2" onclick="setFilter('all')">all</button>
              <button class="col-md-2" onclick="setFilter('food')">food</button>
              <button class="col-md-2" onclick="setFilter('sports')">sports</button>
              <button class="col-md-2" onclick="setFilter('tech')">tech</button>
            </div>
          </div>
          <div class="container" id="items"> 
            
            <!-- Disply items -->
            <div class="row">
              <p class="col-md-2">filter</p>
            </div>
              <?php
                foreach ( $filter as $key => $value) {
                  echo '<div class="row"><img src="../img/shop-o-lot/items/'; 
                  echo $key . '.jpg" alt="' . $value . '" class="col-md-4">';
                  echo '<div class="col-md-6"><h2>' . $value . '</h2><h3>$';
                  echo $prices[$key] . '</h3><button onclick="setKey(\'';
                  echo $key . '\')">Add to cart</button></div></div>';
                } 
              ?>
          </div>
      </div>
   </body>
</html>