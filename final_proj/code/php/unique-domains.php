<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

  
  if($result = $conn->query("SELECT   `domainname` FROM data  GROUP BY `domainname` ")){
    $domainCount=mysqli_num_rows($result);
  
  
  }
  

    echo json_encode(array($domainCount),JSON_FORCE_OBJECT);
?>