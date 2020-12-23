<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }
 

$arr=array();
  if($result = $conn->query("SELECT  DISTINCT contenttype FROM data ")){
    while($row=mysqli_fetch_assoc($result)){
    $arr[] = $row['contenttype'] ;
    }
  
  }
  $arr1=array();
  if($result = $conn->query("SELECT  DISTINCT paroxos FROM data ")){
    while($row=mysqli_fetch_assoc($result)){
    $arr1[] = $row['paroxos'] ;
    }
  
  }
  $arr2=array();
  if($result = $conn->query("SELECT  DISTINCT method FROM data ")){
    while($row=mysqli_fetch_assoc($result)){
    $arr2[] = $row['method'] ;
    }
  
  }

  echo json_encode([$arr,$arr1,$arr2],JSON_FORCE_OBJECT);


  ?>