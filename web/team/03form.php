<?php 
   $majors = array('cs'  => 'Computer Science',
                   'cit' => 'Computer Information Technology',
                   'wdd' => 'Web Design and Development',
                   'ce'  => 'Computer Engineering');
?>
<!DOCTYPE html>
<!-- Form page for Team Activity for week 03 -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Team 03 Form</title>
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
          <form action="03results.php" method="post" class="container">
            <div class="row">
              <p class="col-md-4">Name: <input type="text" name="name" ></p> 
            </div>
            <div class="row">
              <p class="col-md-4">E-mail: <input type="text" name="email"></p> 
            </div>
            <!-- Major radios -->
            <div class="row">
              <p class="col-md-4">Select your major:</p>
            </div>
            <?php  
               foreach ($majors as $key => $value) {
                  echo '<div class="row"><p class="col-md-4"><input type="radio" name="major" value="';
                  echo $key;
                  echo '"> ';
                  echo $value;
                  echo '</p></div>';
                } 
            ?>
            <!-- Continents checkbox -->
            <div class="row">
              <p class="col-md-4">Select the continents you have been to:</p>
            </div>
            <div class="row">
              <p class="col-lg-3"><input type="checkbox" name="continents[]" value="na"> North America</p> 
              <p class="col-lg-3"><input type="checkbox" name="continents[]" value="sa"> South America</p>
              <p class="col-lg-3"><input type="checkbox" name="continents[]" value="au"> Australia</p>
            </div>
            <div class="row">
              <p class="col-lg-3"><input type="checkbox" name="continents[]" value="eu"> Europe</p> 
              <p class="col-lg-3"><input type="checkbox" name="continents[]" value="as"> Asia</p>
              <p class="col-lg-3"><input type="checkbox" name="continents[]" value="af"> Africa</p>
            </div>
            <div class="row">
              <p class="col-lg-12"><input type="checkbox" name="continents[]" value="an"> Antarctica</p>
            </div> 
            <div class="row">
              <p class="col-lg-4">Comment: <textarea name="comment" rows="5" cols="40"></textarea></p>
            </div>
            <input type="submit" name="submit" value="submit">
          </form>
      </div>
   </body>
</html>