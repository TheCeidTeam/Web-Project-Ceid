<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

 if( isset($_POST['paroxos']) ){
$paroxos=$_POST['paroxos'];
$sqlparoxos="AND(" ;
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
  $sqlday="AND(" ;
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
    $sqlmethod="AND(" ;
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
  $sqlcontent="AND(" ;
  for ($x = 0; $x < count($contenttype); $x++) {
    if($x>0){
      $sqlcontent.="OR";
    }
    $sqlcontent.=" contenttype ='$contenttype[$x]'";
  }
  $sqlcontent.=")";
  }
 


$i=0;
$sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 0  ";
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
    
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $zero=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 1  ";
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
      

  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $one=round($row['AVG(wait)'], 3);
  

  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 2  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $two=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 3  ";
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


  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $three=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE HOUR(startedDateTime)= 4  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $four=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE HOUR(startedDateTime) = 5  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $five=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 6  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $six=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 7  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $seven=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 8  ";
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
  if($result = $conn->query( $sql)){
    $row=mysqli_fetch_assoc($result);
    $eight=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 9  ";
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
  if($result = $conn->query( $sql)){
    $row=mysqli_fetch_assoc($result);
    $nine=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE HOUR(startedDateTime) = 10  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $ten=round($row['AVG(wait)'], 3);
  
  
  }
  
  $sql="SELECT  AVG(wait) FROM data WHERE HOUR(startedDateTime) = 11  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $eleven=round($row['AVG(wait)'], 3);
  
  
  }
  
  
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 12  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $twelve=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 13  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $thirteen=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 14  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $fourteen=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 15  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $fifthteen=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 16  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $sixteen=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 17  ";
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
  if($result = $conn->query( $sql)){
    $row=mysqli_fetch_assoc($result);
    $seventeen=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 18  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $eightteen=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 19  ";
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
  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $nineteen=round($row['AVG(wait)'], 3);
  
  
  }
  
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 20  ";
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

  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $twenty=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE HOUR(startedDateTime) = 21  ";
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

  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $twentyone=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE  HOUR(startedDateTime) = 22  ";
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

  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $twentytwo=round($row['AVG(wait)'], 3);
  
  
  }
  $sql="SELECT  AVG(wait) FROM data WHERE HOUR(startedDateTime) = 23  ";
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

  if($result = $conn->query($sql)){
    $row=mysqli_fetch_assoc($result);
    $twentythree=round($row['AVG(wait)'], 3);
  
  
  }
  

  $arr=array($zero,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$eleven,$twelve,$thirteen,$fourteen,$fifthteen,$sixteen,$seventeen,$eightteen,$nineteen,$twenty,$twentyone,$twentytwo,$twentythree);


  

  echo json_encode($arr,JSON_FORCE_OBJECT);

  ?>