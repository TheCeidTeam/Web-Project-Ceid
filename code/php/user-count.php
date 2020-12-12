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
  
  
 // echo json_encode($row["COUNT(*)"]);
 // }else{
   //   echo "fail";
  //}
  if($result = $conn->query("SELECT  COUNT(*) FROM data WHERE `method`= 'GET' ")){
    $row=mysqli_fetch_assoc($result);
    $firstrow= $row["COUNT(*)"];

}
if($result = $conn->query("SELECT  COUNT(*) FROM data WHERE `method`= 'POST ' ")){
    $row=mysqli_fetch_assoc($result);
    $second= $row["COUNT(*)"];

}
$valuesArr=array();
$statusArr=array();
if($result = $conn->query("SELECT  DISTINCT `status` FROM data ")){
  
  while($row=mysqli_fetch_assoc($result)){
    $temp=$row["status"];
    $statusArr[] = $row["status"];
  if($results = $conn->query(" SELECT  COUNT(*) FROM data WHERE `status`= $temp ")){
    $rows=mysqli_fetch_assoc($results);
    $valuesArr[] = $rows["COUNT(*)"];
  }
  
}
}
if($result = $conn->query("SELECT  DISTINCT `domainname` FROM data ")){
  $domainCount=mysqli_num_rows($result);


}
if($result = $conn->query("SELECT  DISTINCT `paroxos` FROM data ")){
  $paroxosCount=mysqli_num_rows($result);


}
if($result = $conn->query("SELECT  AVG(age) FROM data GROUP BY `contenttype` ")){
  $row=mysqli_fetch_assoc($result);
  $age=$row['AVG(age)'];


}
if($result = $conn->query("SELECT  DISTINCT `method` FROM data ")){
  $methods=mysqli_num_rows($result);


}

//array_values($valuesArr)[3]
echo json_encode(array($coutner,$firstrow,$second,$statusArr,$valuesArr,$domainCount, $paroxosCount,$age),JSON_FORCE_OBJECT);


  ?>