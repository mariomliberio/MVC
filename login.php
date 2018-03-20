<?php
    try {
        $connect = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e)
      {
        echo "error: " . $e->getMessage();
        die();
      }
      
?>
