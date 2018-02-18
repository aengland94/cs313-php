<?php
   session_start();
   $currentDB = NULL;

   function getDB() 
   {
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

      return $db;
   }

   function connectToDB()
   {
      $currentDB = getDB();
   }

   function checkUsername($username)
   {
      $db = getDB();

      $stmt = $db->prepare('SELECT * FROM users WHERE username=:username');
      $stmt->execute(array(':username' => $username));
      $query = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //check if $username is in $db
      foreach ($query as $row)
         if ($row['username'] == $username)
            return true;
      
      return false;
   }

   function checkPassword($username, $password)
   {
      $db = getDB();

      $stmt = $db->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
      $stmt->execute(array(':username' => $username, ':password' => $password));
      $query = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //check if $username is in $db
      foreach ($query as $row)
         if ($row['username'] == $username)
            return true;
      
      return false;
   }

   function insertUser($username, $password, $display_name)
   {
      $db = getDB();

      $stmt = $db->prepare('INSERT INTO users (username, password, display_name) VALUES (:username, :password, :display_name)');
      $stmt->execute(array(':username' => $username, ':password' => $password, ':display_name' => $display_name));
   }

   function setUser($username)
   {
      $db = getDB();

      $stmt = $db->prepare('SELECT * FROM users WHERE username=:username');
      $stmt->execute(array(':username' => $username));
      $query = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($query as $row) 
      {
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['username'] = $row['username'];
         $_SESSION['display_name'] = $row['display_name'];
      }

      $_SESSION['contact_id'] = 0;
   }

   function getContact($contact_id)
   {
      if (!isset($_SESSION['contact_id']))
         return 7;

      if(!isset($_SESSION['user_id']))
         header('Location: login.php');

      $db = getDB();

      $stmt = $db->prepare('SELECT * FROM contacts WHERE user_id=:user_id AND contact_id=:contact_id');
      $stmt->execute(array(':user_id' => $_SESSION['user_id'], ':contact_id' => $contact_id));
      $query = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($query as $row) 
      {
         return $row['id'];
      }

      return 6;
   }

   function insertMessage($message_text)
   {
      $db = getDB();

      $contact_id = getContact($_SESSION['contact_id']);
      //$contacts_id = 4;

      $stmt = $db->prepare('INSERT INTO messages (contact_id, message_text) VALUES (:contact_id, :message_text)');
      $stmt->execute(array(':contact_id' => $contact_id, ':message_text' => $message_text));
   }

   function insertContact($contact_id)
   {
      $db = getDB();

      if (getContact($contact_id) == 0)
      {
         $stmt = $db->prepare('INSERT INTO contacts (user_id, contact_id) VALUES (:user_id, :contact_id)');
         $stmt->execute(array(':user_id' => $_SESSION['user_id'], ':contact_id' => $contact_id));
      }
   }

   function getUsers()
   {
      $db = getDB();

      $stmt = $db->prepare('SELECT * FROM users ORDER BY display_name');
      $stmt->execute();
      $query = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $query;
   }
?>