<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

  
  if($result = $conn->query("SELECT   `paroxos` FROM data  GROUP BY `paroxos`")){
    $paroxosCount=mysqli_num_rows($result);
  
  
  }
  

    echo json_encode(array($paroxosCount),JSON_FORCE_OBJECT);
?>