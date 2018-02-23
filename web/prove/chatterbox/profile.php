<?php
   session_start(); 

   require "db.php";

   //connect to database
   $db = getDB();

    if (!isset($_SESSION['db']))
       $_SESSION['db'] = $db;
    if (!isset($_SESSION['username']))
       header("Location: login.php");
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
        <link rel="stylesheet" type="text/css" href="chatterbox.css"/>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script>
           function setMessages(newContact){
            $.post("messages.php", {contact: newContact}, function(){ 
                location.reload(true);
            });
          }
        </script>
   </head>
   <body class="container"> 
      <div class="row header">
         <h1 class="col-md-4"><?php echo $_SESSION['display_name']; ?></h1>
         <div class="col"></div>
         <div class="col-md-4">
           <div class="row">
             <h2 class="col-md-12">Chatterbox</h2>
           </div>
           <div class="row">
             <a href="logout.php" class="col-md-12">log out</a>
           </div>
         </div>
      </div>
      <div class="body row">
         <div class="col-md-4">
            <div class="row">
              <h2 class="col-md-12">Contacts:</h2>
              <a href="addContact.php" class="col-md-12">Add A Contact</a>
            <?php 
              /*echo '<script> alert("before foreach"); </script>';*/
              foreach ($_SESSION['db']->query("SELECT * FROM contacts AS c
                                              JOIN users AS u
                                              ON u.id = c.contact_id
                                              WHERE c.user_id = " . $_SESSION['user_id'] .
                                              "ORDER BY u.display_name;") as $row)
              {
                 echo '<button class="col-md-12" onclick="setMessages(' . $row['contact_id'] . ')">' . $row['display_name'] . '</button>';
              }
           
            ?> 
            </div>
         </div>
         <div class="col-md-6">
            <div class="row">
              <?php 
                 if ($_SESSION['contact_id'] == 0)
                 {
                    echo "<p class='col-md-6'>Click on a contact to send them a message and view the conversation you have had with them.</p>";
                    echo "<p class='col-md-6'>Click on Add A Contact to add a new one</p>";
                 }
                 else
                 {
                    foreach ($_SESSION['db']->query("SELECT * FROM messages AS m
                                                     JOIN contacts AS c 
                                                     ON c.id = m.contact_id
                                                     JOIN users AS u
                                                     ON u.id = c.user_id
                                                     WHERE (c.user_id = " . $_SESSION['user_id'] . " OR c.contact_id = " . $_SESSION['user_id'] . ")
                                                     AND (c.user_id = " . $_SESSION['contact_id'] . " OR c.contact_id = " . $_SESSION['contact_id'] . ")
                                                     ORDER BY m.id") as $row)
                    {
                        if ($row['user_id'] == $_SESSION['user_id'])
                        {
                           echo "<h3 class='col-md-6 you align-self-end'>You</h3>";
                           echo "<p class='col-md-6 you align-self-end'>" . $row['message_text'] . "</p>";
                        }
                        else
                        {
                           echo "<h3 class='col-md-6 them'>" . $row['display_name'] . "</h3>";
                           echo "<p class='col-md-6 them'>" . $row['message_text'] . "</p>";
                        }
                    }
                 }
              ?>
            </div>
            <form class="row" action="send.php" method="POST">
               <textarea rows="3" maxlength="250" name="message_text" class="col-md-6" autofocus></textarea>
               <input type="submit" name="submit" value="send" class="col-md-2">
            </form>
         </div>
      </div>
   </body>
</html>