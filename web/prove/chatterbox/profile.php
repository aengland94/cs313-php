<?php
   session_start(); 
   $db = NULL;

    try 
    {
       $dbUrl = getenv('DATABASE_URL');
       /*if (!isset($dbUrl) || empty($dbUrl))
          echo '<script> alert("Not Set"); </script>';
       else
          echo '<script> alert("Set"); </script>';*/
       $dbopts = parse_url($dbUrl);
       $dbHost = $dbopts["host"];
       $dbPort = $dbopts["port"];
       $dbUser = $dbopts["user"];
       $dbPassword = $dbopts["pass"];
       $dbName = ltrim($dbopts["path"],'/');

       // PDO connection
       $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

       $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    }  catch (PDOException $ex) 
    {
       echo "Error! Cannot connect to DB because: $ex";

       die();
    }
    if (!isset($_SESSION['db']))
       $_SESSION['db'] = $db;
    if (!isset($_SESSION['username']))
       $_SESSION['username'] = 'hpotter';
    if (!isset($_SESSION['display_name']))
       $_SESSION['display_name'] = 'Harry Potter';
    if (!isset($_SESSION['user_id']))
       $_SESSION['user_id'] = 2;
   //require "db.php";
   //session_unset();
   // if(!isset($_SESSION['username'])){
   //    $_SESSION['username'] = 'aengland94';

   //connect to database
   //connectToDB();
   //$stmt = $dp->prepare('SELECT * FROM public.users WHERE username=:username');
   //$stmt->execute(array(':username' => $_SESSION['username']););
   //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!-- Profile page for Chatterbox -->
<html>
   <head>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $_SESSION['display_name']; ?></title>
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
         
         <div class="container"> 
            <div class="row">
              <h1 class="col-md-4"><?php echo $_SESSION['display_name']; ?></h1>
            </div>
            <?php 
              /*$statement = $currentDB->prepare("SELECT username FROM public.users");
              $statement->execute();

              while($row = $statement->fetch(PDO::FETCH_ASSOC))*/
              /*echo '<script> alert("before foreach"); </script>';*/
              foreach ($_SESSION['db']->query("SELECT * FROM contacts AS c
                                              JOIN users AS u
                                              ON u.id = c.contact_id
                                              WHERE c.user_id = 2
                                              ORDER BY u.display_name;") as $row)
              {
                 echo '<div class="row"><p class="col-md-4">' . $row['display_name'] . '</p></div>';
              }
           
            ?> 
            
         </div>
         <div class="container">
            <form class="row" action="" method="POST">
               <textarea rows="3" maxlength="250" class="col-md-6" autofocus></textarea>
               <input type="submit" name="submit" value="send" class="col-md-2">
            </form>
         </div>
      </div>
   </body>
</html>