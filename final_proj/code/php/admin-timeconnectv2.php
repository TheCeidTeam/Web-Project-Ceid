<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();
$hours=array();
$wait=array();
if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

 if( isset($_POST['paroxos']) ){
$paroxos=$_POST['paroxos'];
$sqlparoxos="AND (" ;
    for ($x = 0; $x < count($paroxos); $x++) {
      if($x>0){
        $sqlparoxos.="OR";
      }
      $sqlparoxos.=" paroxos ='$paroxos[$x]'";
    }
    $sqlparoxos.=")";
}

if( isset($_POST['day']) ){
  $day=$_POST['day'];
  $sqlday="AND (" ;
  for ($x = 0; $x < count($day); $x++) {
    if($x>0){
      $sqlday.="OR";
    }
    $sqlday.=" DAYOFWEEK(datadate) ='$day[$x]'";
  }
  $sqlday.=")";
 
  }

if( isset($_POST['method']) ){
    $method=$_POST['method'];
    $sqlmethod="AND (" ;
    for ($x = 0; $x < count($method); $x++) {
      if($x>0){
        $sqlmethod.="OR";
      }
      $sqlmethod.=" method ='$method[$x]'";
    }
    $sqlmethod.=")";
    }

if( isset($_POST['contenttype']) ){
  $contenttype=$_POST['contenttype'];
  $sqlcontent="AND (" ;
  for ($x = 0; $x < count($contenttype); $x++) {
    if($x>0){
      $sqlcontent.="OR";
    }
    $sqlcontent.=" contenttype ='$contenttype[$x]'";
  }
  $sqlcontent.=")";
  }
 


$i=0;

$sql="SELECT HOUR(startedDateTime),AVG(wait) FROM data ";
if( isset($_POST['method']) || isset($_POST['contenttype']) ||  isset($_POST['paroxos']) ||isset($_POST['day'])  ){
  $sql.= "WHERE 1 " ;
}

if( isset($_POST['method']) ){
$sql.=$sqlmethod;
}
if( isset($_POST['contenttype']) ){
  $sql.=  $sqlcontent;
  }
  if( isset($_POST['paroxos']) ){
    $sql.=  $sqlparoxos;
    }
    if( isset($_POST['day']) ){
      $sql.=  $sqlday;
      }
     
      $sqlgroup=" GROUP BY HOUR(startedDateTime) ";
      $sql.= $sqlgroup;
  if($result = $conn->query($sql)){
    while($row1=mysqli_fetch_assoc($result)){
      
      $hours[]=$row1['HOUR(startedDateTime)'];
      $wait[]=round($row1['AVG(wait)'],3);
      
    
    }
  }




$zero=0;
$one=0;
$two=0;
$three=0;
$four=0;
$five=0;
$six=0;
$seven=0;
$eight=0;
$nine=0;
$ten=0;
$eleven=0;
$twelve=0;
$thirteen=0;
$fourteen=0;
$fifthteen=0;
$sixteen=0;
$seventeen=0;
$eightteen=0;
$nineteen=0;
$twenty=0;
$twentyone=0;
$twentytwo=0;
$twentythree=0;


for ($i=0 ;$i<count($hours); $i++){
if($hours[$i]==0){
  $zero=$wait[$i];
  continue;
}
if($hours[$i]==1){
  $one=$wait[$i];
  continue;
}
if($hours[$i]==2){
  $two=$wait[$i];
  continue;
}
if($hours[$i]==3){
  $three=$wait[$i];
  continue;
}
if($hours[$i]==4){
  $four=$wait[$i];
  continue;
}
if($hours[$i]==5){
  $five=$wait[$i];
  continue;
}
if($hours[$i]==6){
  $six=$wait[$i];
  continue;
}
if($hours[$i]==7){
  $seven=$wait[$i];
  continue;
}

if($hours[$i]==8){
  $eight=$wait[$i];
  continue;
}
if($hours[$i]==9){
  $nine=$wait[$i];
  continue;
}
if($hours[$i]==10){
  $ten=$wait[$i];
  continue;
}
if($hours[$i]==11){
  $eleven=$wait[$i];
  continue;
}
if($hours[$i]==12){
  $twelve=$wait[$i];
  continue;
}
if($hours[$i]==13){
  $thirteen=$wait[$i];
  continue;
}
if($hours[$i]==14){
  $fourteen=$wait[$i];
  continue;
}
if($hours[$i]==15){
  $fifthteen=$wait[$i];
  continue;
}
if($hours[$i]==16){
  $sixteen=$wait[$i];
  continue;
}
if($hours[$i]==17){
  $seventeen=$wait[$i];
  continue;
}
if($hours[$i]==18){
  $eightteen=$wait[$i];
  continue;
}
if($hours[$i]==19){
  $nineteen=$wait[$i];
  continue;
}
if($hours[$i]==20){
  $twenty=$wait[$i];
  continue;
}
if($hours[$i]==21){
  $twentyone=$wait[$i];
  continue;
}
if($hours[$i]==22){
  $twentytwo=$wait[$i];
  continue;
}
if($hours[$i]==23){
  $twentythree=$wait[$i];
  continue;
}

}


$arr=array($zero,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$eleven,$twelve,$thirteen,$fourteen,$fifthteen,$sixteen,$seventeen,$eightteen,$nineteen,$twenty,$twentyone,$twentytwo,$twentythree);




echo json_encode($arr,JSON_FORCE_OBJECT);


?>