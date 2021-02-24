<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }
  $contentArr=array();
  $age=array();
  if($result = $conn->query("SELECT   `contenttype`,AVG(age) FROM data GROUP BY `contenttype` ")){
    while($row=mysqli_fetch_assoc($result)){
      
      $contentArr[] = $row["contenttype"];
    $age[]=round($row['AVG(age)'],3);
  
  
  }
}
  
  

    echo json_encode(array($contentArr,$age),JSON_FORCE_OBJECT);

?>