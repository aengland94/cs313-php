<?php
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
?>