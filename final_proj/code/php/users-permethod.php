<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

  
$methods=array();
$count=array();
if($result = $conn->query("SELECT   `method`,COUNT(*) FROM data GROUP BY `method` ")){
    while($row1=mysqli_fetch_assoc($result)){
      
      $methods[]=$row1['method'];
       
        $count[ ]= $row1["COUNT(*)"];
    
    }
  }
  
  
  

    echo json_encode(array($methods,$count),JSON_FORCE_OBJECT);
?>