<?php 
   $continents = array('na' => 'North America', 
                       'sa' => 'South America',
                       'as' => 'Asia',
                       'eu' => 'Europe',
                       'au' => 'Australia',
                       'af' => 'Aftrica',
                       'an' => 'Antarctica');
   $majors = array('cs'  => 'Computer Science',
                   'cit' => 'Computer Information Technology',
                   'wdd' => 'Web Design and Development',
                   'ce'  => 'Computer Engineering');
?>
<!DOCTYPE html>
<!-- Results page for Team Activity for week 03 -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Team 03 Results</title>
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
   	<div id="header">
         <h1>Team 03</h1>
         <nav>
         	  <a href="../index.html">Home</a>
            <a href="../team.html">Team</a>
            <a href="../prove.html">Prove</a>
            <a href="http://anthony.acengland.net">ePortfolio</a>
         </nav>
      </div>
      <div class="body">
          <div class="container">
            <div class="row">
              <p class="col-md-6">Your name: <?php echo $_POST[name]; ?></p> 
            </div>
            <div class="row">
              <p class="col-md-6">Your e-mail: 
                <?php echo '<a href="mailto:';
                      echo $_POST[email];
                      echo '" >';
                      echo $_POST[email];
                      echo '</a>'; ?> </p> 
            </div>
            <!-- Major radios -->
            <div class="row">
              <p class="col-md-6">Your major: <?php echo $majors[$_POST[major]]; ?></p>
            </div> 
            
            <!-- Continents checkbox -->
            <div class="row">
              <p class="col-md-2">You have been to:</p>
              <?php
               if(!empty($_POST[continents])){
                  foreach ($_POST[continents] as $key => $value) {
                     echo '<p class="col-md-2">';
                     echo $continents[$value];
                     echo '</p>';
                   } 
                }
              ?>
            </div>
            
            <div class="row">
              <p class="col-md-6">Your comment: <?php echo $_POST[comment]; ?></p>
            </div>
          </div>
      </div>
   </body>
</html>