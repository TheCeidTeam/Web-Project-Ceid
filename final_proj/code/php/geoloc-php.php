<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }
 
 

  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$arr=array();
  $sql="SELECT email FROM users WHERE type='user' ";
  if($result = $conn->query($sql)){
    while($row=mysqli_fetch_assoc($result)){

        $var=$row['email'];
       
        $sql="SELECT server_loc,COUNT(*),geoloc FROM data WHERE useremail = '$var' GROUP BY server_loc";

        if($results = $conn->query($sql)){


            while($rows=mysqli_fetch_assoc($results)){

              if($rows['server_loc']!=="empty" && $rows['server_loc']!=="No_Ip" &&  $rows['server_loc']!==""){
                $arr[]=[$rows['server_loc'],$rows['COUNT(*)'],$rows['geoloc'],$var];
              }
                
    
        
    }

}
}
}

echo json_encode($arr,JSON_FORCE_OBJECT);



?>