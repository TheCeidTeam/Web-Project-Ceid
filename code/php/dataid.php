<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }


  if($result = $conn->query("SELECT  MAX(dataid)  FROM data GROUP BY useremail
  ")){
    while($row=mysqli_fetch_assoc($result)){
    $arr = $row['MAX(dataid)'] ;
    }

    echo json_encode($arr,JSON_FORCE_OBJECT);

  ?>