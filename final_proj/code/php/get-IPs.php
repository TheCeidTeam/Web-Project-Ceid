<?php
    session_start();
    require_once 'db_connect.php';
    $conn = dbConnect();
    if (!$conn) {
      die('Could not connect: ' . mysql_error());
    }
    $LngLat=array();
    $count=array();
    $cnt=0;
    $var2=$_SESSION['username'];
    
    $sql="SELECT email FROM users WHERE username  = '$var2' ";
   
    $result = $conn->query($sql);

    while($row1=mysqli_fetch_assoc($result)){
        $var1=$row1['email'];
    }
    




    $sql="SELECT server_loc,COUNT(server_loc) FROM data WHERE useremail  = '$var1' GROUP BY server_loc";
    $result = $conn->query($sql);
    while($row=mysqli_fetch_assoc($result)){
         $LngLat[]=$row['server_loc'];
         $count[] = $row['COUNT(server_loc)'];
    
    }
   
    
    $stack = array($LngLat);
    array_push($stack,$count);
    print_r(json_encode($stack));
    //echo json_encode($stack,JSON_FORCE_OBJECT);
?>