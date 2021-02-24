<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

  
  $valuesArr=array();
  $statusArr=array();
  if($result = $conn->query("SELECT   COUNT(*),`status` FROM data GROUP BY `status` ")){
    
    while($row=mysqli_fetch_assoc($result)){
      $statusArr[] = $row["status"];
      $valuesArr[] = $row["COUNT(*)"];
    }
    
  
  }
  

    echo json_encode(array($statusArr,$valuesArr),JSON_FORCE_OBJECT);
?>