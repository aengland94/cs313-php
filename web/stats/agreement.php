<?php 
   session_start();
?>

<!DOCTYPE html>
<!-- Agreement page for STATS -->
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Risk and Data Collection Agreement</title>
      <link rel="icon" type="image/png" href="img/logoBlack@0.5x.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <!-- JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <!-- Bootstrap Javascript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
      <style type="text/css">
         .warning { color: red; }
      </style>
   </head>
   <body class="container">
      <div class="row justify-content-around">
         <h1 class="col-md-8">Risk and Data Collection Agreement</h1>
      </div>
      <div class="row justify-content-around">
         <p class="col-md-5 warning"><strong>WARNING:</strong> As a part of this study, <em>Red Food Coloring</em> is used. This <em>Red Food Coloring</em> contains: <em>Red Dye #40</em> and <em>Red Dye #3</em>. <strong>If you have an alergy to either of these, please DO NOT continue with this study.</strong></p>
         <p class="col-md-5">I consent to and understand the risks associated with this study including the potential health risks from injesting Red Food Coloring. I also consent to let those doing the study to share my answers in the MATH 221A class.</p>
      </div>
      <form action="<?php echo htmlspecialchars('submitAgreement.php'); ?>" method="POST" class="row justify-content-around">
         <h3 class="col-md-2">Signiture: </h3>
         <input type="text" name="name" class="col-md-4" maxlength="30">
         <input type="submit" name="submit" value="I AGREE" class="col-md-2">
      </form>
   </body>
</html>