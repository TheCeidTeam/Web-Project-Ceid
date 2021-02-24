<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

  

  if($result = $conn->query("SELECT  COUNT(*) FROM users ")){
    $row=mysqli_fetch_assoc($result);
    $coutner=$row['COUNT(*)'];
   
    }
    echo json_encode(array($coutner),JSON_FORCE_OBJECT);
?>