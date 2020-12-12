<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }








if( isset($_POST['contenttype']) ){
  $contenttype=$_POST['contenttype'];
  $sqlcontent="(" ;
  for ($x = 0; $x < count($contenttype); $x++) {
    if($x>0){
      $sqlcontent.="OR";
    }
    $sqlcontent.=" contenttype ='$contenttype[$x]'";
  }
  $sqlcontent.=")";
  }

  if( isset($_POST['paroxos']) ){

    $paroxos=$_POST['paroxos'];
    if( isset($_POST['contenttype']) ){
    $sqlparoxos="AND(" ;
    }else{
        $sqlparoxos="(";
    }
        for ($x = 0; $x < count($paroxos); $x++) {
          if($x>0){
            $sqlparoxos.="OR";
          }
          $sqlparoxos.=" paroxos ='$paroxos[$x]'";
        }
        $sqlparoxos.=")";
    }

  $sql="SELECT cachecontrol  FROM data ";

  if( isset($_POST['contenttype']) || isset($_POST['paroxos']) ){
    $sql.="WHERE ";
  }
  if( isset($_POST['contenttype']) ){
    $sql.=  $sqlcontent;
    }
  if( isset($_POST['paroxos']) ){
    $sql.=  $sqlparoxos;
    }

$arr=array();

if($result = $conn->query($sql)){
    while($row=mysqli_fetch_assoc($result)){
    $arr[]=$row['cachecontrol'];
}
}
echo json_encode($arr,JSON_FORCE_OBJECT);

    ?>